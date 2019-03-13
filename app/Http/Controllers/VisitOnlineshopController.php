<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitOnlineshopController extends Controller
{
    //


    public function  index()
    {
        return view('onlineshop.index');
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
