<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable=['name'];

    public function products()
    {
        return $this->belongsToMany('App\Product','Productstags','tag_id','product_id');

    }
    public function posts()
    {
        return $this->belongsToMany('App\Photo','poststag','tag_id','post_id');

    }

}
