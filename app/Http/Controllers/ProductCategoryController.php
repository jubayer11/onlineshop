<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
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
        $categories=Category::all();
        return view('category.index',compact('categories'));
    }
    public function store(Request $request)
    {

        category::create($request->all());
        return redirect(route('category.index'));
    }
    public function edit($id)
    {
        //
        $category=category::findOrFail($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        //
        $category=   category::findOrFail($id);
        $category->update($request->all());
        return redirect(route('category.index'));

    }
    public function destroy($id)
    {
        //
        category::findOrFail($id)->delete();
        return redirect(route('category.index'));
    }


}
