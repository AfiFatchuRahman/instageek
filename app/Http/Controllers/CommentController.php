<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {	
    	$this->validate($request, [
            'comment' => 'required',
        ]);

        $input = $request->all();

        Comment::create($input);

        return redirect()->back();
    }
}