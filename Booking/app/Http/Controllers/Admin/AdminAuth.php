<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuth extends Controller
{
    //
    public function login()
    {
     return view('admin.login');
    }

    public function dologin()
    {
        $rememberme=request('rememberme')== 1 ? true: false;
        if (auth()->guard('admin')->attempt(['email'=>request('email'),'password'=>request('password')],$rememberme)){
            return redirect('admin');
        }
        else{
            session()->flash('error',trans('admin.incorrect_information_login'));
            return redirect('admin/login');
        }

    }
}