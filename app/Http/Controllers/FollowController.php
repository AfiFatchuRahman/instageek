<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class FollowController extends Controller
{
    public function store(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->following()->attach(Auth::user()->id);

    	return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->following()->detach(Auth::user()->id);

    	return redirect()->back();
    }
}
