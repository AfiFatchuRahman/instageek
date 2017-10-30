<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Filesystem;

use App\Models\Post;

class PostController extends Controller
{	
   	public function index(Request $request)
    {
    	return view('upload', compact('user'));
    }

    public function show($id)
    {
        $post = Post::whereId($id)->first();
    	return view('post',compact('post'));
    }

    public function store(Request $request)
    {
    	$post = new Post();

    	$request->photo->storeAs('public', $request->user_id.$request->photo->getClientOriginalName());

    	$post->create([
    		'user_id' => $request->user_id, 
    		'caption' => $request->caption, 
    		'photo' => $request->user_id.$request->photo->getClientOriginalName()
    	]);
    	
    	return redirect('home');
    }
}