<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function blacklist()
	{
		return $this->hasOne(BlacklistKeyword::class);
	}
	
	public function posts()
	{
		return $this->hasMany(Post::class);
	}
	
	public function follower()
	{
		return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
	}
	
	public function following()
	{
		return $this->belongsToMany(User::class, 'followings', 'user_id', 'following_id');
	}
}
