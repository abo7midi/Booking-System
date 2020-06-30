{{--
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}
@if(session()->has('added'))
    <div class="alert alert-success">
        <h3>{{session('added')}}</h3>
    </div>
@endif
