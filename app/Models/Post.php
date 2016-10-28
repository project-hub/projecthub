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

	public function skills()
	{
<<<<<<< HEAD
		return $this->belongsToMany('App\Models\Skill');
=======
		return $this->belongsToMany('App\Models\Skill', 'post_skills');
>>>>>>> ae2a319517659a771be6eea1409c6da0208cf429
	}
}