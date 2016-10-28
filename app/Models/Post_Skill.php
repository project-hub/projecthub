<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_Skill extends Model
{
    protected $table = 'post_skills';

    public function posts()
    {
    	return $this->hasMany('App\Models\posts', 'created_by', 'id');
    }

    public function skills()
    {
    	return $this->belongsTo('App\Models\skills', 'id');
    }
}
