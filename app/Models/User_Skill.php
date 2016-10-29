<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Skill extends Model
{
    protected $table = 'user_skills';

    public function users()
    {
    	return $this->belongsToMany('App\Models\User');
    }

    public function skills()
    {
    	return $this->belongsToMany('App\Models\Skill');
    }
}
