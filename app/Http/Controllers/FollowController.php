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

        $userFollower = User::findOrFail($request->follower_id);
        $user->follower()->attach($userFollower);

    	return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->following_id);
        Auth::user()->following()->detach($user);

        $userFollower = User::findOrFail($request->follower_id);
        $user->follower()->detach($userFollower);

    	return redirect()->back();
    }
}