<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $post->like()->attach(Auth::user()->id);

    	return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $post->like()->detach(Auth::user()->id);

    	return redirect()->back();
    }
}
