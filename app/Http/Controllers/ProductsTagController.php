<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class ProductsTagController extends Controller
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
        $tags=Tag::all();
        return view('tag.index',compact('tags'));
    }
    public function store(Request $request)
    {

        Tag::create($request->all());
        return redirect(route('tag.index'));
    }
    public function edit($id)
    {
        //
        $tag=Tag::findOrFail($id);
        return view('tag.edit',compact('tag'));
    }

    public function update(Request $request, $id)
    {
        //
        $tag=   Tag::findOrFail($id);
        $tag->update($request->all());
        return redirect(route('tag.index'));

    }
    public function destroy($id)
    {
        //
        Tag::findOrFail($id)->delete();
        return redirect(route('tag.index'));
    }


}
