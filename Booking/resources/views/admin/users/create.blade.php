@extends('admin.index')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body">
            {!! Form::open(['url'=>aurl('users')]) !!}
            <div class="form-group">
                {!! Form::label('name',trans('admin.name-col')) !!}
                {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
                @if($errors->has('name'))
                    <div class="alert alert-danger" role="alert">{{$errors->first('name')}}</div>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('email',trans('admin.email-col')) !!}
                {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
                @if($errors->has('email'))
                    <div class="alert alert-danger" role="alert">{{$errors->first('email')}}</div>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('password',trans('admin.password-col')) !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
                @if($errors->has('password'))
                    <div class="alert alert-danger" role="alert">{{$errors->first('password')}}</div>
                @endif
            </div>
            {{ Form::hidden('typeID', 1) }}
            {!! Form::submit(trans('admin.add_new_user'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection


