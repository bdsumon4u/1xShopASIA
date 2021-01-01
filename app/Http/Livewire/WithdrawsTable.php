<?php

namespace App\Http\Livewire;

use App\Models\Withdraw;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class WithdrawsTable extends TableComponent
{
    public function query(): Builder
    {
        return Withdraw::query();
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
                ->sortable(),
        ];
    }
}
