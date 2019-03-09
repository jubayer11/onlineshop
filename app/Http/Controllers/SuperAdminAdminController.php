<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminRequest;
use App\Role;
use Illuminate\Http\Request;
use Session;

class SuperAdminAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=Admin::all();
        return view('admin.super.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $admins=Admin::all();
        $roles=Role::all();


        return view('admin.super.create',compact('roles','admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $admin=new Admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request->password);
        $admin->status=$request->status;
        $admin->role_id=$request->role;
        $admin->user_name=$request->username;
        $admin->save();

        Session::flash('success','Admin created');
        return redirect()->route('super.admin.index');


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
        $admin=Admin::findOrFail($id);
        $roles=Role::all();
        return view('admin.super.edit',compact('admin','roles'));

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

        $admin=Admin::find($id);

        if($request->hasFile('image'))
        {
            $admin_image=$request->image;
            $admin_image_new_name=time().$admin_image->getClientOriginalName();
            $admin_image->move('uploads/profile',$admin_image_new_name);
            $admin->image=$admin_image_new_name;
            $admin->save();

        }
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request->password);
        $admin->status=$request->status;
        $admin->role_id=$request->role;
        $admin->user_name=$request->username;
        $admin->save();

        Session::flash('success','Admin Edited');
        return redirect()->route('super.admin.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin=Admin::find($id);
        if(file_exists($admin->image))
        {
            unlink($admin->image);
        }
        $admin->delete();
        Session::flash('success','admin deleted');
        return redirect()->back();
    }
}
