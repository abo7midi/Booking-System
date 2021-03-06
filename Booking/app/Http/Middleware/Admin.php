<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param null $guard
     * @return mixed
     */
    public function handle($request, Closure $next=null, $guard=null )
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }
        else{
            return redirect('admin/login');
        }

    }
}
