<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /*
    public function handle($request, Closure $next)
    {

        foreach (Auth::user()->role as $role)
        {
            if($role->name=='SuperAdmin')
            {
                return $next($request);
            }
        }
        return redirect('/');

    }
   */
    public function handle($request, Closure $next)
    {
        if (is_null(Auth::user())) {
            return redirect('/check');
        }

        $role=Auth::user()->role;
        if (is_null($role)) {
            return redirect(route('/'));
        }

        if($role->name=='SuperAdmin')
        {
            return $next($request);
        }


        return redirect('/');
    }
}
