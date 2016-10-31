<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	protected $table = 'posts';
	protected $fillable = ['created_by', 'title', 'content', 'on_site'];
	
	public function users()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function skills()
	{

		return $this->belongsToMany('App\Models\Skill', 'post_skills', 'post_id', 'skill_id');

	}
}