<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Skill extends Model
{
    protected $table = 'post_skills';

    public function posts()
    {
    	return $this->belongsTo('App\Models\posts', 'created_by', 'id');
    }

    public function skills()
    {
    	return $this->belongsTo('App\Models\skills', 'id');
    }
}
