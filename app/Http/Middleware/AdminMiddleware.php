<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null(Auth::user())) {
            return redirect('/check');
        }

        $role=Auth::user()->role;
        $user=Auth::user();
        if (is_null($role)) {
            return redirect(route('/'));
        }

        if($role->name=='SuperAdmin' && $user->status==1)
        {
            return $next($request);
        }
        if($role->name=='Admin' && $user->status==1)
        {
            return $next($request);
        }
        if($role->name=='Editor' && $user->status==1)
        {
            return $next($request);
        }


        return redirect('/');
    }
}
