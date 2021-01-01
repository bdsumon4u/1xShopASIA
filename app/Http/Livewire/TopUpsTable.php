<?php

namespace App\Http\Livewire;

use App\Models\TopUp;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TopUpsTable extends TableComponent
{
    public function query(): Builder
    {
        return TopUp::query();
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
                ->sortable(),
        ];
    }
}
