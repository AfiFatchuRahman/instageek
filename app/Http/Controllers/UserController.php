<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function show($id)
    {
       	$user = User::whereUsername($id)->orderByRaw('updated_at - created_at DESC')->first();

        return view('user', compact('user'));
    }
}