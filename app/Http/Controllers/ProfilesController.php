<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;

class ProfilesController extends Controller
{

    public function index( $user )
    {
        $user = User::findOrFail($user);
        return view('profiles.index',compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = InterventionImage::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }

    public function follow(Request $request)
    {
        $auth_user_id = auth()->user()->id;
        $user_id = $request->get('id');

        if ($auth_user_id == $user_id) {
            return response()->json([
                'success' => false,
                'message' => "Can't follow yourself!",
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'user_id' => $user_id,
                'auth_user_id' => $auth_user_id,
            ],
            'message' => "User successfully followed...",
        ]);
    }
}
