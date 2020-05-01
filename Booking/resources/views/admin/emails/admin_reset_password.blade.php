@component('mail::message')
# Reset Account
Welcome {{$data['data']->name}} <br>
  To reset password.

@component('mail::button', ['url' => aurl('reset/password/'.$data['token'])])
Click Here To reset your Password
@endcomponent
<br>
Or <br>
Copy This Link:
<a href="{{aurl('reset/password/'.$data['token'])}}">{{aurl('reset/password/'.$data['token'])}}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
