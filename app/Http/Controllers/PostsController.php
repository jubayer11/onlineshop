<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostPhoto;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index()
    {
        //
        $posts=Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('post.create');

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
       $post=new Post();
        $user=Auth::user();

        $post->title=$request->title;
        $post->body=$request->body;
        $post->admin_id=$user->id;
        $post->save();
       return redirect()->route('post.index');

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
        //
        $post=Post::find($id);
        $tags=Tag::all();
        return view('post.edit',compact('post','tags'));
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
        $post=Post::find($id);

        if($request->hasFile('image'))
        {
            $post_image=$request->image;
            $post_image_new_name=time().$post_image->getClientOriginalName();
            $post_image->move('uploads/post',$post_image_new_name);
            $photo=PostPhoto::create(['name'=>$post_image_new_name]);
            $post->photo_id=$photo->id;
            $post->save();

        }
        $post->title=$request->title;
        $post->body=$request->body;
        if (isset($request->tag)) {

            $post->tags()->sync([$request->tag], false);
        } else {
            $post->tags()->sync(array());
        }
        $post->is_active=$request->is_active;
        $post->save();
        return redirect()->route('post.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function tag($id)
    {
        $tags=Tag::all();

        $post=Post::find($id);
        return view('post.tag',compact('post','tags'));
    }
    public function tagdetach($tag_id,$post_id)
    {
        $tags=Tag::all();
        $post=Post::find($post_id);
        $post->tags()->detach($tag_id);
        return view('post.tag',compact('post','tags'));

    }
    public function tagpost(Request $request,$id)
    {
        $post=Post::find($id);
        $tags=Tag::all();
        if (isset($request->tag)) {

            $post->tags()->sync([$request->tag], false);
        } else {
            $post->tags()->sync(array());
        }
        return view('post.tag',compact('post','tags'));

    }


}
