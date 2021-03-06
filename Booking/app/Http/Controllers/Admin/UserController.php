<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\UserDataTable;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $user)
    {
        //
        return $user->render('admin.users.index',['title'=>'user control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.users.create',['title'=>trans('admin.add_new_user')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data=$this->validate(request(),[
            'name'      =>   'required',
            'email'     =>   'required|email|unique:users',
            'password'  =>   'required|min:8',
            'typeID'    =>   'required'
        ],[],[
            'name'      =>   trans('admin.name-col'),
            'email'     =>   trans('admin.email-col'),
            'password'  =>   trans('admin.password-col')
        ]);
        $data['password']=bcrypt(\request('password'));

        print_r($data);
        User::create($data);
        session()->flash('added',trans('admin.record_added'));
        return redirect(aurl('users'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
