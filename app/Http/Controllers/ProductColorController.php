<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    //


    public function index()
    {
        //
        $colors=Color::all();
        return view('color.index',compact('colors'));
    }
    public function store(Request $request)
    {

        Color::create($request->all());
        return redirect(route('color.index'));
    }
    public function edit($id)
    {
        //
        $color=Color::findOrFail($id);
        return view('color.edit',compact('color'));
    }

    public function update(Request $request, $id)
    {
        //
        $color=Color::findOrFail($id);
        $color->update($request->all());
        return redirect(route('color.index'));

    }
    public function destroy($id)
    {
        //
        Color::findOrFail($id)->delete();
        return redirect(route('color.index'));
    }

}
