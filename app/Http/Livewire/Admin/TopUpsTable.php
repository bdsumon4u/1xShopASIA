<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\TableComponent;
use App\Models\TopUp;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TopUpsTable extends TableComponent
{
    public $status;

    public function mount($status = '')
    {
        $this->status = $status;
    }

    public function query(): Builder
    {
        return $this->status ? TopUp::where('status', $this->status) : TopUp::query();
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
            Column::make('Trx ID')
                ->searchable()
                ->sortable()
                ->format(function (TopUp $model) {
                    return explode('-', $model->trx_id)[0];
                }),
            Column::make('Status')
                ->searchable()
                ->sortable()
                ->format(function (TopUp $model) {
                    return $this->html('<span class="'.$model->status->color().'">'.$model->status.'</span>');
                }),
            Column::make('Action')
                ->format(function (TopUp $model) {
                    return $this->html('<a class="py-2 px-3 md:px-4 rounded bg-teal-400 text-white font-bold hover:bg-teal-300" href="'.route('admin.topups.edit', $model).'">Edit</a>');
                }),
        ];
    }
}
