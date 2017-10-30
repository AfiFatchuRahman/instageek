<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class DefaultController extends Controller
{
    public function index()
    {
    	$posts = Post::with(['user','comment'])->orderByRaw('updated_at - created_at DESC')->get();
        return view('welcome', compact('posts'));
    }
}