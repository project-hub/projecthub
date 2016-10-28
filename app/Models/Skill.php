<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = ['name'];

    public function post_skills()
    {
    	return $this->hasMany('App\Models\post_skills');
    }

    public function user_skills()
    {
    	return $this->hasMany('App\Models\user_skills');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\user_skills');
    }
}
