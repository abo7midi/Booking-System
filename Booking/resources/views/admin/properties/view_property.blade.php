@extends('admin.index')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body">
            {!! Form::open(['id'=>'form_data','url' => aurl('rooms_types/destroy/selected')]) !!}

            {!! Form::hidden('_method','delete') !!}
            {!! $dataTable->table(['class'=>'dataTable table table-striped table-hover table-bordered'],true) !!}

            {!! Form::close() !!}
        </div>
    </div>

    <!--************ modal *************-->

    <!-- Modal -->
    <div id="multipaleDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <div class="empty_record hidden">
                            <h2>{{trans('admin.please_check_some_records')}} !</h2>
                        </div>
                        <div class="not_empty_record hidden">
                            <h2>{{trans('admin.ask_delete_item')}} ? <span class="record_count">5</span></h2>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="empty_record hidden">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.close')}}</button>
                    </div>
                    <div class="not_empty_record hidden">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.no')}}</button>
                        <input type="submit" name="del_selected" value="{{trans('admin.yes')}}" class="btn btn-danger del_selected">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--************ Script *************-->
    @push('js')
        <script>
            delete_selected();
        </script>
        {!! $dataTable->scripts() !!}
    @endpush
@endsection


