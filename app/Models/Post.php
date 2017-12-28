<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $guarded = [
		'_token', 'location',
	];

	protected $fillable = [
		'user_id', 'photo', 'caption',
	];

    public function comment()
	{
		return $this->hasMany(Comment::class);
	}
	
	public function like()
	{
		return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
	}
	
	public function tag()
	{
		return $this->belongsToMany(User::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function report()
	{
		return $this->belongsTo(PostReport::class);
	}
}