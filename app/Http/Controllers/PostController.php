<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::whereId($id)->first();
    	return view('post',compact('post'));
    }
}