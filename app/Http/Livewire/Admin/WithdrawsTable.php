<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\TableComponent;
use App\Models\Withdraw;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class WithdrawsTable extends TableComponent
{
    public $status;

    public function mount($status = '')
    {
        $this->status = $status;
    }

    public function query(): Builder
    {
        return $this->status ? Withdraw::where('status', $this->status) : Withdraw::query();
    }

    public function columns() : array
    {
        return [
            Column::make('ID')
                ->searchable()
                ->sortable(),
            Column::make('Player ID')
                ->searchable()
                ->sortable(),
            Column::make('Currency')
                ->searchable()
                ->sortable(),
            Column::make('Amount')
                ->searchable()
                ->sortable(),
            Column::make('WDraw Code', 'withdrawal_code')
                ->searchable()
                ->sortable()
                ->format(function (Withdraw $model) {
                    return explode('-', $model->withdrawal_code)[0];
                }),
            Column::make('Status')
                ->searchable()
                ->sortable()
                ->format(function (Withdraw $model) {
                    return $this->html('<span class="'.$model->status->color().'">'.$model->status.'</span>');
                }),
            Column::make('Action')
                ->format(function (Withdraw $model) {
                    return $this->html('<a class="py-2 px-3 md:px-4 rounded bg-teal-400 text-white font-bold hover:bg-teal-300" href="'.route('admin.withdraws.edit', $model).'">Edit</a>');
                }),
        ];
    }
}
