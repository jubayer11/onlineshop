<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductPhoto;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $products=Product::all();
        $category = Product::with('categories')->get();

        return view('products.index',compact('products','category'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();

        return view('products.create',compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product=new Product;



        $product->name=$request->name;
        $product->price=$request->price;
        $product->color=$request->color;
        $product->size=$request->size;
        $product->save();
        Session::flash('success','product created');
        return redirect()->route('product.index');


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
        $product=Product::find($id);
        $categories=Category::all();
        return view('products.edit',compact('categories','product'));
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
        $product=Product::find($id);

        if($request->hasFile('image'))
        {
            $product_image=$request->image;
            $product_image_new_name=time().$product_image->getClientOriginalName();
            $product_image->move('uploads/product',$product_image_new_name);
            $photo=ProductPhoto::create(['name'=>$product_image_new_name]);
            $product->image_id=$photo->id;
            $product->save();

        }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->size=$request->size;
        $product->color=$request->color;
        $product->save();
        if (isset($request->category)) {

            $product->categories()->sync([$request->category], false);
        } else {
            $product->categories()->sync(array());
        }


        Session::flash('success','Admin Edited');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product=Product::findOrFail($id);
        if($request->file('image')==''){
            $input=$request->except('photo_id');
        }
        else{
            $input=$request->all();
            unlink(public_path()."/images/".$product->image->name);

        }

        $product->delete($input);
        Session::flash('deleted_user','the user has been deleted');

        return  redirect(route('product.index'));

    }
    public function category($id)
    {
        $product=Product::find($id);
        return view('products.category',compact('product'));
    }
    public function categorydetach($category_id,$product_id)
    {
        $product=Product::find($product_id);
        $product->categories()->detach($category_id);
        return view('products.category',compact('product'));

    }
}
