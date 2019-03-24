<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EditorMiddleware
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
        if (is_null($role)) {
            return redirect(route('/'));
        }

        if($role->name=='SuperAdmin')
        {
            return $next($request);
        }
        if($role->name=='Admin')
        {
            return $next($request);
        }
        if($role->name=='Editor')
        {
            return $next($request);
        }


        return redirect('/');
    }
}
