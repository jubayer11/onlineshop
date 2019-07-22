<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //

    public function likeIt(Post $post)
    {
        $post->like()->create([
            'user_id' => auth()->id()
        ]);




    }
    public function unLikeIt(Post $post)
    {
        $post->like()->where('user_id',auth()->id())->first()->delete();
 //       broadcast(new LikeEvent($reply->id, 0))->toOthers();
        //$reply->like()->where('user_id','1')->first()->delete();

    }


}
