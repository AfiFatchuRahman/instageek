<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {	
    	$post = Post::whereId($request->post_id)->first();

    	$this->validate($request, [
            'comment' => 'required',
        ]);

        $input = $request->all();

        Comment::create($input);

        $post->comment_count = $post->comment_count + 1;
        $post->save();

        return redirect()->back();
    }
}