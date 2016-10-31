<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'company_name', 'employer', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'created_by');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Models\Skill', 'user_skills', 'user_id', 'skill_id');
        // return $this->hasMany('App\Models\User_Skill', 'user_id');
    }

    public static function searchUsers($searchTerm) 
    {
        return self::where('first_name', 'LIKE' , '%' . $searchTerm . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('company_name', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('address', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('city', 'LIKE', '&' . $searchTerm . '%')
                    ->orWhere('state', 'LIKE', '&' . $searchTerm . '%')
                    ->orWhere('email', 'LIKE', '&' . $searchTerm . '%')
                    ->orWhere('content', 'LIKE', '&' . $searchTerm . '&');
    }
}
