<?php

namespace App\Http\Controllers;

use App\carousel;
use App\Category;
use App\SecondCarousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarouselController extends Controller
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
        $carousel=carousel::all();
        $categories=Category::all();

        return view('carousel.index',compact('carousel','categories'));
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
        return view('carousel.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $carousel=new Carousel;
        $carousel->name=$request->name;
        $carousel->category_id=$request->category;
        $carousel->save=$request->save;
        $carousel->body=$request->body;
        $carousel->save();

        Session::flash('success','Admin created');
        return redirect()->route('carousel.index');
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
        $carousel=Carousel::find($id);
        $categories=Category::all();
        return view('carousel.edit',compact('carousel','categories'));


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
        $carousel=Carousel::find($id);

        if($request->hasFile('photo'))
        {
            $carousel_image=$request->photo;
            $carousel_image_new_name=time().$carousel_image->getClientOriginalName();
            $carousel_image->move('uploads/carousel',$carousel_image_new_name);
            $carousel->photo=$carousel_image_new_name;
            $carousel->save();

        }
        $carousel->name=$request->name;
        $carousel->category_id=$request->category;
        $carousel->save=$request->save;
        $carousel->body=$request->body;
        $carousel->save();

        Session::flash('success','carousel Edited');
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel=Carousel::find($id);
        if(file_exists($carousel->photo))
        {
            unlink($carousel->photo);
        }
        $carousel->delete();
        Session::flash('success','admin deleted');
        return redirect()->back();

    }

    public function second_index()
    {
        $carousel=Secondcarousel::all();
        $categories=Category::all();

        return view('carousel.second_index',compact('carousel','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function second_create()
    {
        //

        $categories=Category::all();
        return view('carousel.second_create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function second_store(Request $request)
    {

        $carousel=new SecondCarousel;
        $carousel->name=$request->name;
        $carousel->category_id=$request->category;
        $carousel->save();

        Session::flash('success','Admin created');
        return redirect()->route('second_carousel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function second_edit($id)
    {
        $carousel=SecondCarousel::find($id);
        $categories=Category::all();
        return view('carousel.Second_edit',compact('carousel','categories'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function second_update(Request $request, $id)
    {
        $carousel=SecondCarousel::find($id);

        if($request->hasFile('photo'))
        {
            $carousel_image=$request->photo;
            $carousel_image_new_name=time().$carousel_image->getClientOriginalName();
            $carousel_image->move('uploads/carousel',$carousel_image_new_name);
            $carousel->photo=$carousel_image_new_name;
            $carousel->save();

        }
        $carousel->name=$request->name;
        $carousel->category_id=$request->category;
        $carousel->save();

        Session::flash('success','carousel Edited');
        return redirect()->route('second_carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function second_destroy($id)
    {
        $carousel=SecondCarousel::find($id);
        if(file_exists($carousel->photo))
        {
            unlink($carousel->photo);
        }
        $carousel->delete();
        Session::flash('success','admin deleted');
        return redirect()->back();

    }



}
