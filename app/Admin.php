<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\notifications\AdminResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_name','image','role','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    //relationship role table
    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    public function isAdmin()
    {
        if($this->role['name'] == "SuperAdmin" && $this->is_active ==1)
        {
            return true;
        }
        return false;
    }
    public function getGravatarAttribute()
    {
        $hash=md5(strtolower(trim($this->attributes['email']))) . "?d=mm";
        return "http://www.gravatar.com/avatar/$hash";
    }


    public function posts()
    {
        return $this->hasMany('App\Post');
    }



}
