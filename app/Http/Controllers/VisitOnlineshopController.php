<?php

namespace App\Http\Controllers;

use App\carousel;
use App\Category;
use App\Product;
use App\SecondCarousel;
use Illuminate\Http\Request;

class VisitOnlineshopController extends Controller
{
    //


    public function  index()
    {

        $carousel=carousel::all();
        $second_carousel=SecondCarousel::all();
        $second_carousel2=SecondCarousel::all();
        $carousel1=$second_carousel->first();
        $carousel2=$second_carousel->take(-4);
        $categories=Category::all()->take(-3);
        $category=Category::all()->first();



        return view('onlineshop.index',compact('carousel','carousel1','carousel2','categories','category'));
    }

    public function  index2($id)
    {
        $categories1=Category::find($id);
        $products=$categories1->products->take(8);
        $carousel=carousel::all();
        $second_carousel=SecondCarousel::all();
        $second_carousel2=SecondCarousel::all();
        $carousel1=$second_carousel->first();
        $carousel2=$second_carousel->take(-4);
        $categories=Category::all()->take(-3);
        $category=Category::all()->first();



        return view('onlineshop.index',compact('carousel','carousel1','carousel2','categories','category','products'));
    }


    public function quickview($id)
    {

        $product_quickview=Product::find($id);
        return view('onlineshop.product',compact('product_quickview'));


    }

    public function  nopage()
    {
        return view('onlineshop.404');
    }
    public function  account()
    {
        return view('onlineshop.account');
    }
    public function  blogArchive()
    {
        return view('onlineshop.blog-archive-2');
    }
    public function  blogSingle()
    {
        return view('onlineshop.blog-single');
    }
    public function  cart()
    {
        return view('onlineshop.cart');
    }
    public function  checkout()
    {
        return view('onlineshop.checkout');
    }
    public function  contact()
    {
        return view('onlineshop.contact');
    }
    public function  product()
    {
        return view('onlineshop.product');
    }
    public function  productDetail()
    {
        return view('onlineshop.product-detail');
    }
    public function  wishlist()
    {
        return view('onlineshop.wishlist');
    }

}
