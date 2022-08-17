<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //

    public function store(Request $request)
    {
        dd($request->all());
        $auth_user_id = auth()->user()->id;
        $user_id = $user->username;

//        if ($auth_user_id == $user_id) {
//            return response()->json([
//                'success' => false,
//                'message' => "Can't follow yourself!",
//            ]);
//        }

        return response()->json([

        ]);
    }
}
