<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // protected $fillable = ['name']; 

    // public function post_skills()
    // {
    // 	return $this->hasMany('App\Models\Post_Skill');
    // }

    // public function user_skills()
    // {
    // 	return $this->hasMany('App\Models\User_Skill');
    // }


    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
