<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Post extends Model
{
	protected $table = 'posts';
	protected $fillable = ['created_by', 'title', 'content', 'on_site'];
	
	public function users()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function post_skills()
	{
		return $this->hasMany('App\Models\Skill');
	}
}