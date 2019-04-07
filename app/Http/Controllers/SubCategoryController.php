<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('SAdmin');
    }

    public function index()
    {
        //
        $sub_categories=SubCategory::all();
        return view('sub_category.index',compact('sub_categories'));
    }
    public function store(Request $request)
    {

        SubCategory::create($request->all());
        return redirect(route('sub_category.index'));
    }
    public function edit($id)
    {
        //
        $sub_category=SubCategory::findOrFail($id);
        return view('sub_category.edit',compact('sub_category'));
    }

    public function update(Request $request, $id)
    {
        //
        $sub_category=   SubCategory::findOrFail($id);
        $sub_category->update($request->all());
        return redirect(route('sub_category.index'));

    }
    public function destroy($id)
    {
        //
        SubCategory::findOrFail($id)->delete();
        return redirect(route('sub_category.index'));
    }



}
