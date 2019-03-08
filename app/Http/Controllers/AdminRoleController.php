<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    //

    public  function  create()
    {
        return view('admin.roles.create');
    }

}
