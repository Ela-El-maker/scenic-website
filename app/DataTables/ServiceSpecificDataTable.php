<?php

namespace App\DataTables;

use App\Models\ServiceSpecific;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServiceSpecificDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('image', function ($query) {
                return '<img style="width:70px" src = "' . asset($query->image) . '"></img>';
            })
            ->addColumn('image_1', function ($query) {
                return '<img style="width:70px" src = "' . asset($query->image_1) . '"></img>';
            })
            ->addColumn('image_2', function ($query) {
                return '<img style="width:70px" src = "' . asset($query->image_2) . '"></img>';
            })
            ->addColumn('image_3', function ($query) {
                return '<img style="width:70px" src = "' . asset($query->image_3) . '"></img>';
            })
            ->addColumn('image_4', function ($query) {
                return '<img style="width:70px" src = "' . asset($query->image_4) . '"></img>';
            })

            ->addColumn('action', function ($query) {
            return '<a href="' . route('admin.service-specific.edit', $query->id) . '" class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="' . route('admin.service-specific.destroy', $query->id) . '" class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i></a>';
        })
        ->rawColumns(['image','image_1','image_2','image_3','image_4','action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(ServiceSpecific $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('servicespecific-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('image'),
            Column::make('image_1'),
            Column::make('image_2'),
            Column::make('image_3'),
            Column::make('image_4'),

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ServiceSpecific_' . date('YmdHis');
    }
}
