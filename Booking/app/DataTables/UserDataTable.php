<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('edit', 'admin.users.btn.edit')
            ->addColumn('delete', 'admin.users.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('user-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->lengthMenu([[10,25,50,100],[10,25,50,trans('admin.all_record')]])
                    ->orderBy(1)
                    /*->parameters([
                        'lengthMenu' => [
                            [ 10, 25, 50, -1 ],
                            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                        ],
                    ])*/
                    ->buttons(
                        Button::make(trans('admin.create_btn')),
                        Button::make(trans('admin.export_btn')),
                        Button::make(trans('admin.print_btn')),
                        Button::make(trans('admin.reset_btn')),
                        Button::make(trans('admin.reload_btn'))
                    )
                    ->initComplete('function () {
                                                this.api().columns([3,4]).every(function () {
                                                    var column = this;
                                                    var input = document.createElement("input");
                                                    $(input).appendTo($(column.footer()).empty())
                                                    .on("keyup", function () {
                                                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                                        column.search(val ? val : \'\', true, false).draw();   });
            });
        }');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed(trans('admin.edit-col'))
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::computed(trans('admin.delete-col'))
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make(trans('admin.id-col')),
            Column::make(trans('admin.name-col')),
            Column::make(trans('admin.email-col')),
            Column::make(trans('admin.create-at-col')),
            Column::make(trans('admin.update-at-col')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}
