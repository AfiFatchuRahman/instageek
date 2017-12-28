<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class FollowController extends Controller
{
    public function store(Request $request)
    {
        //store following
        $user = User::findOrFail($request->following_id);
        Auth::user()->following()->attach($user);

        Auth::user()->following_count = Auth::user()->following_count + 1;
        Auth::user()->save();

        //store follower
        $userFollower = User::findOrFail($request->follower_id);
        $user->follower()->attach($userFollower);

        $user->follower_count = $user->follower_count + 1;
        $user->save();

    	return redirect()->back();
    }

    public function destroy(Request $request)
    {
        //destroy following
        $user = User::findOrFail($request->following_id);
        Auth::user()->following()->detach($user);

        Auth::user()->following_count = Auth::user()->following_count - 1;
        Auth::user()->save();

        //destroy follower
        $userFollower = User::findOrFail($request->follower_id);
        $user->follower()->detach($userFollower);

        $user->follower_count = $user->follower_count - 1;
        $user->save();

    	return redirect()->back();
    }
}