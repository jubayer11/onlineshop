<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Product;
use App\ProductPhoto;
use App\Size;
use App\Tag;
use App\Admin;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('SAdmin');
    }
    public function index()

    {
        $products=Product::all();


        return view('products.index',compact('products'));


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
        $tags=Tag::all();
        $sizes=Size::all();
        $colors=Color::all();
        return view('products.edit',compact('categories','product','tags','sizes','colors'));
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

        $product->save();
        if (isset($request->category)) {

            $product->categories()->sync([$request->category], false);
        } else {
            $product->categories()->sync(array());
        }
        if (isset($request->tag)) {

            $product->tags()->sync([$request->tag], false);
        } else {
            $product->tags()->sync(array());
        }
        if (isset($request->color)) {

            $product->colors()->sync([$request->color], false);
        } else {
            $product->colors()->sync(array());
        }
        if (isset($request->size)) {

            $product->sizes()->sync([$request->size], false);
        } else {
            $product->sizes()->sync(array());
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
            $input=$request->except('image_id');
        }
        else{
            $input=$request->all();
            unlink(public_path()."/uploads/product/".$product->image->name);

        }

        $product->delete($input);
        Session::flash('deleted_product','the user has been deleted');

        return  redirect(route('product.index'));

    }
    public function category($id)
    {
        $categories=Category::all();
        $product=Product::find($id);
        return view('products.category',compact('product','categories'));
    }
    public function categorydetach($category_id,$product_id)
    {   $categories=Category::all();
        $product=Product::find($product_id);
        $product->categories()->detach($category_id);
        return view('products.category',compact('product','categories'));

    }
    public function tag($id)
    {
        $tags=Tag::all();

        $product=Product::find($id);
        return view('products.tag',compact('product','tags'));
    }
    public function tagdetach($tag_id,$product_id)
    {
        $tags=Tag::all();
        $product=Product::find($product_id);
        $product->tags()->detach($tag_id);
        return view('products.tag',compact('product','tags'));

    }
    public function tagproduct(Request $request,$id)
    {
        $product=Product::find($id);
        $tags=Tag::all();
        if (isset($request->tag)) {

            $product->tags()->sync([$request->tag], false);
        } else {
            $product->tags()->sync(array());
        }
        return view('products.tag',compact('product','tags'));

    }
    public function categoryproduct(Request $request,$id)
    {
        $product=Product::find($id);
        $categories=Category::all();
        if (isset($request->category)) {

            $product->categories()->sync([$request->category], false);
        } else {
            $product->categories()->sync(array());
        }
        return view('products.category',compact('product','categories'));

    }

    public function size($id)
    {
        $sizes=Size::all();

        $product=Product::find($id);
        return view('products.size',compact('product','sizes'));
    }
    public function color($id)
    {
        $colors=Color::all();

        $product=Product::find($id);
        return view('products.color',compact('product','colors'));
    }
    public function sizedetach($size_id,$product_id)
    {
        $sizes=Color::all();
        $product=Product::find($product_id);
        $product->sizes()->detach($size_id);
        return view('products.size',compact('product','sizes'));

    }
    public function colordetach($color_id,$product_id)
    {
        $colors=Color::all();
        $product=Product::find($product_id);
        $product->colors()->detach($color_id);
        return view('products.color',compact('product','colors'));

    }
    public function colorproduct(Request $request,$id)
    {
        $product=Product::find($id);
        $colors=Color::all();
        if (isset($request->color)) {

            $product->colors()->sync([$request->color], false);
        } else {
            $product->colors()->sync(array());
        }
        return view('products.color',compact('product','colors'));

    }
    public function sizeproduct(Request $request,$id)
    {
        $product=Product::find($id);
        $sizes=Size::all();
        if (isset($request->size)) {

            $product->sizes()->sync([$request->size], false);
        } else {
            $product->sizes()->sync(array());
        }
        return view('products.size',compact('product','sizes'));

    }




}
