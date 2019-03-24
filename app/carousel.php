<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    //
    protected $fillable=['name','category_id','save','body','photo'];

    public function categories()
    {
        return $this->belongsTo('App\Category','category_id');


    }

}
