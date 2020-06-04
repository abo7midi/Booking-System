<?php

namespace App\DataTables;

use App\RoomType;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RoomTypeDataTable extends DataTable
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
            ->addColumn('edit', 'admin.layouts.btn.edit')
            ->addColumn('delete', 'admin.layouts.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\RoomType $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RoomType $model)
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
                    ->setTableId('roomtype-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->lengthMenu([[10,25,50,100],[10,25,50,trans('admin.all_record')]])
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create')->className('btn btn-primary')->text(' <i class="fa fa-plus"></i> '.trans('admin.add_room_type')),
                        Button::make('csv')->className('btn btn-primary')->text(trans('admin.ex_csv').' <i class="fa fa-file"></i>'),
                        Button::make('excel')->className('btn btn-primary')->text(trans('admin.ex_excel').' <i class="fa fa-file"></i>'),
                        Button::make('pdf')->className('btn btn-primary')->text(trans('admin.ex_pdf').' <i class="fa fa-file"></i>'),
                        Button::make('print')->className('btn btn-primary'),
                        Button::make('reset')->className('btn btn-primary'),
                        Button::make('reload')->className('btn btn-primary')
                    )
            ->initComplete('function () {
                                                this.api().columns([0,1,2,3]).every(function () {
                                                    var column = this;
                                                    var input = document.createElement("input");
                                                    $(input).appendTo($(column.footer()).empty())
                                                    .on("keyup", function () {
                                                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                                        column.search(val ? val : \'\', true, false).draw();   });
            });
        }')
            ->language(datatable_lang());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [


            Column::make(trans('admin.id-col')),
            Column::make('roomName')->title(trans('admin.type-name-col')),
            Column::make('created_at')->title(trans('admin.create-at-col')),
            Column::make('updated_at')->title(trans('admin.update-at-col')),

            Column::computed('edit')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                ->title(trans('admin.edit-col')),
            Column::computed('delete')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                ->title(trans('admin.delete-col')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'RoomType_' . date('YmdHis');
    }
}
