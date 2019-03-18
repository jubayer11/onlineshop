<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    protected $fillable=['name'];

    public function products()
    {
        return $this->belongsToMany('App\Product','productcolor','size_id','product_id');

    }
}
