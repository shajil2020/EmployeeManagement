<?php

namespace App\DataTables;

use App\Models\Employee;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Services\DataTable;

class EmployeeDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'employees.action'); // Assuming you have a Blade view for actions
    }

    public function query(Employee $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1);
    }

    protected function getColumns()
    {
        return [
            // Define your columns here
            'id',
            'first_name',
            'email',
            'created_at',
            'updated_at',
        ];
    }
}
