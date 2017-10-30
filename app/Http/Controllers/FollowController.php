<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class FollowController extends Controller
{
    public function store(Request $request)
    {
        $user = User::findOrFail($request->following_id);
        Auth::user()->following()->attach($user);

    	return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->following_id);
        Auth::user()->following()->detach($user);

    	return redirect()->back();
    }
}
