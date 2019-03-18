<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','image_id','color','size'];


    public function categories()
{
    return $this->belongsToMany('App\Category','product_categories','product_id','category_id')->withTimestamps();


}
    public function tags()
    {
        return $this->belongsToMany('App\Tag','productstags','product_id','tag_id')->withTimestamps();


    }
    public function sizes()
    {
        return $this->belongsToMany('App\Size','productsize','product_id','size_id')->withTimestamps();


    }
    public function colors()
    {
        return $this->belongsToMany('App\Color','productcolor','product_id','color_id')->withTimestamps();


    }
public function image()
{
    return $this->belongsTo('App\ProductPhoto','image_id');
}


}
