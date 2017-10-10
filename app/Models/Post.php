<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	
	public function likes()
	{
		return $this->belongsToMany(User::class);
	}
	
	public function tags()
	{
		return $this->belongsToMany(User::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function reports()
	{
		return $this->belongsTo(PostReport::class);
	}
}