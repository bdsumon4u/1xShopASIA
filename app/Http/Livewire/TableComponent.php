<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\TableComponent as Table;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;

abstract class TableComponent extends Table
{
    use HtmlComponents;

    public $refresh = false;

    protected $options = [
        'bootstrap.classes.table' => 'border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative min-w-full divide-y divide-gray-200',
        'bootstrap.classes.thead' => 'py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100',
    ];

    /**
     * TableComponent constructor.
     *
     * @param  null  $id
     */
    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->perPage = 10;
        $this->paginationTheme = 'tailwind';
        $this->clearSearchButton = true;
        $this->sortDirection = 'desc';
        $this->ascSortIcon = '<svg class="inline-block fill-current h-5 w-4" viewBox="0 0 20 20">
                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
	c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
	L17.418,6.109z"></path>
                                </svg>';
        $this->descSortIcon = '<svg class="inline-block fill-current h-5 w-4" viewBox="0 0 20 20">
                                    <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
	c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
	"></path>
                                </svg>';
    }
}
