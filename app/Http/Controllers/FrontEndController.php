<?php

namespace App\Http\Controllers;

use App\carousel;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function carousel()
    {
        $carousel=carousel::all();
        return view('onlineshop.index',compact('carousel'));
    }


}
