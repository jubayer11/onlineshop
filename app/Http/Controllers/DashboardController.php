<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('Admin');
    }


    public function dashboard()

  {
    return view('admin.super.dashboard.dashboard');
   }


    public function icons()

    {
        return view('admin.super.dashboard.icons');
    }
    public function maps()

    {
        return view('admin.super.dashboard.maps');
    }
    public function notifications()

    {
        return view('admin.super.dashboard.notifications');
    }
    public function table()

    {
        return view('admin.super.dashboard.table');
    }
    public function template()

    {
        return view('admin.super.dashboard.template');
    }
    public function typography()

    {
        return view('admin.super.dashboard.typography');
    }
    public function upgrade()

    {
        return view('admin.super.dashboard.upgrade');
    }
    public function user()

    {
        $admin=Auth::user();
        if(Auth::user()->status==1)
        {
            $status='Active';
        }
        else
        {
            $status='not Active';
        }



        return view('admin.super.dashboard.user',compact('admin','status'));
    }


    public function profile($id)
    {
        $admin=Admin::find($id);
        $roles=Role::all();

        if($admin->status==1)
        {
            $status='Active';
        }
        else
        {
            $status='not Active';
        }
        return view('Admin.super.dashboard.editProfile',compact('admin','status','roles'));


    }
    public function profileEdit(Request $request,$id)
    {

        $this->validate($request,[
            'password'=>'confirmed',

        ]);
        $profile=Admin::find($id);
        if($request->hasFile('image'))
        {
            $profile_image_name=$request->image;
            $profile_image_new_name=time().$profile_image_name->getClientOriginalName();
            $profile_image_name->move('uploads/profile',$profile_image_new_name);
            $profile->image=$profile_image_new_name;
            $profile->save();
        }

        if($request->password!='')
        {
            $profile->password=bcrypt($request->password);
        }
        $profile->password=bcrypt($request->password);

        $profile->name=$request->name;
        $profile->email=$request->email;

        $profile->user_name=$request->user_name;

        $profile->save();
        return redirect(route('super.user'));



    }


}
