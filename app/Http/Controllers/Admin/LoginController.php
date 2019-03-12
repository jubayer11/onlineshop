<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');


    }


    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        $role = $this->guard()->user()->role;
        if (is_null($role)) {
            return redirect('/');
        }

        if ($role->name == 'SuperAdmin') {
            return redirect(route('super.admin.create'));
        } elseif ($role->name == 'Admin') {
            return redirect('/');
        }
    }




        public function showLoginForm()
    {
        return view('admin.login');

    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function username()
    {
        return 'user_name';
    }






}
