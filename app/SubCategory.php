<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $fillable=[
        'name'
    ];



    public function products()
    {
        return $this->belongsToMany('App\Product','sub_category','category_id','product_id');

    }
}
