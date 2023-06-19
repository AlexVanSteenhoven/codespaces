<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Datatable extends Component
{
    public array $tableHeaders;
    public array $tableData;

    /**
     * Create a new component instance.
     * @param array $tableHeaders - Define the headers for the table
     * @param array $tableData - Define the data for the table
     */
    public function __construct(array $tableHeaders = [], array $tableData = [])
    {
        $this->tableHeaders = $tableHeaders;
        $this->tableData = $tableData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $table = [
            'headers' => $this->tableHeaders,
            'rows' => $this->tableData
        ];

        return view('components.datatable', compact('table'));
    }
}
