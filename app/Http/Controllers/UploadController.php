<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;

class UploadController extends Controller
{
    public function index(Request $request)
    {
    	$user = $request->user();

    	return view('upload', compact('user'));
    }

    public function store(Request $request)
    {
    	$input = $request->all();

    	$post = new Post();

    	if($request->hasFile('photo'))
    	{
    		$path = $request->photo->storeAs('', 'images.jpg');
    	}

    	$post->user_id = $request->user_id;

    	$post->caption = $request->caption;

    	$post->photo = 'images.jpg';

    	$post->save();

    	return redirect('home');
    }
}