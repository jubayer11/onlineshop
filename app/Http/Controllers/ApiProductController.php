<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductsResource;
use App\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    //

    public function index(){
        return ProductsResource::collection(Product::latest()->get());
    }
    public function index1(){
        return CategoryResource::collection(Category::latest()->get());
    }

}
