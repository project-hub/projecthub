<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Skill extends Model
{
    protected $table = 'user_skills';

    public function users()
    {
    	return $this->belongsTo('App\Models\users', 'id');
    }

    public function skills()
    {
    	return $this->belongsTo('App\Models\skills', 'id');
    }
}
