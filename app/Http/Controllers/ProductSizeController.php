<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('SAdmin');
    }

    public function index()
    {
        //
        $sizes=Size::all();
        return view('size.index',compact('sizes'));
    }
    public function store(Request $request)
    {

        Size::create($request->all());
        return redirect(route('size.index'));
    }
    public function edit($id)
    {
        //
        $size=Size::findOrFail($id);
        return view('size.edit',compact('size'));
    }

    public function update(Request $request, $id)
    {
        //
        $size=Size::findOrFail($id);
        $size->update($request->all());
        return redirect(route('size.index'));

    }
    public function destroy($id)
    {
        //
        Size::findOrFail($id)->delete();
        return redirect(route('size.index'));
    }

}
