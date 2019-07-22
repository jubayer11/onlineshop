<?php

namespace App\Http\Controllers;

use App\carousel;
use App\Category;
use App\Post;
use App\Product;
use App\SecondCarousel;
use App\Tag;
use Illuminate\Http\Request;

class VisitOnlineshopController extends Controller
{
    //


    public function  index()
    {

        $carousel=carousel::all();
        $second_carousel=SecondCarousel::all();
        $carousel1=$second_carousel->first();
        $carousel2=$second_carousel->take(-4);
        $categories=Category::all()->take(-3);
        $category=Category::all()->first();
        $posts=Post::latest()->take(3)->get();



       return view('onlineshop.index',compact('carousel','carousel1','carousel2','categories','category','posts'));
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
        $tags=Tag::all()->take(5);
        $categories=Category::all()->take(5);
        $posts=Post::inRandomOrder()->paginate(3);
        $reposts=Post::latest()->take(3)->get();



      return view('onlineshop.blog-archive-2',compact('tags','categories','posts','reposts'));
    }
    public function  blogSingle($id)
    {
        $post=Post::findOrFail($id);
        return view('onlineshop.blog-single',compact('post'));
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
