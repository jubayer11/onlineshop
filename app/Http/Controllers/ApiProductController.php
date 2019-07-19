<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductsResource;
use App\Http\Resources\secondSlideResource;
use App\Http\Resources\SizeResource;
use App\Product;
use App\Tag;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    //

    public function index(){
        return ProductsResource::collection(Product::latest()->get());
    }
//    public function index_category(){
//        return CategoryResource::collection(Category::latest()->get());
//    }
//    public function index_size(){
//        return SizeResource::collection(Category::latest()->get());
//    }
    public function category(){
        return CategoryResource::collection(Category::take(4)->get());
    }

    public function onecategory(Category $id){
      return ProductsResource::collection($id->products);

  }
    public function productone(Product $id){

        return ProductsResource::collection(Product::find($id));

    }

    public function tag(){
        return secondSlideResource::collection(Tag::take(3)->get());
    }
    public function onetag(Tag $id){
        return ProductsResource::collection($id->products);

    }







}
