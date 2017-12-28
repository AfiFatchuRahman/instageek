<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TestController extends Controller
{
    public function index()
    {
    	$post = Post::get();
    	return view('test')->with('post', $post);;
    }
}
