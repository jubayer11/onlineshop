<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondCarousel extends Model
{
    //
    protected $fillable=['name','category_id','photo'];

    public function categories()
    {
        return $this->belongsTo('App\Category','category_id');


    }

}
