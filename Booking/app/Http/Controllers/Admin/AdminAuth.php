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
        if (admin()->attempt(['email'=>request('email'),'password'=>request('password')],$rememberme)){
            return redirect('admin');
        }
        else{
            session()->flash('error',trans('admin.incorrect_information_login'));
            return redirect('admin/login');
        }

    }
   public function logout(){
       admin()->logout();
       return redirect('admin/login');


    }
    public function forget_password(){

       return view('admin.forget_password');


    }

    public function forget_password_post(){

       return view('admin.forget_password');


    }
}
