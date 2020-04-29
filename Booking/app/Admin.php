<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authentically;
use Illuminate\Notifications\Notifiable;

class Admin extends Authentically
{

    use Notifiable;
    //
    protected $table = 'admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
