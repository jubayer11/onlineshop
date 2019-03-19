<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','user_id','admin_id','body','tag_id','photo_id'];


    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function image()
    {
        return $this->belongsTo('App\PostPhoto','photo_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag','poststag','post_id','tag_id');
    }
    public function admin()
    {
        return $this->belongsTo('App\Admin','admin_id');
    }

}

