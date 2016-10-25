<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'votes';
    protected $fillable = ['created_by', 'vote_for'];
	
	public function users()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}
}
