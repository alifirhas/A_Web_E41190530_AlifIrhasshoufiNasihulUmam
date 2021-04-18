<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(User $user, Post $post, Request $request)
    {
        $posts = POST::orderBy('created_at', 'desc')->where('user_id', $user->id)->paginate(7);

        return view('profile.index', [
            'posts' => $posts,
            'user' => $user,
        ]);
    }

    public function profileEdit()
    {

        return view('profile.profileEdit');
    }

    public function destroy(User $user, Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        User::where('id', $user->id)->delete();

        return redirect()->route('landing');
    }

    public function put(User $user, Request $request)
    {
        // echo "passwordnya sekarang "+auth()->user()->password;

        dd('this is update data');
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        User::where('id', $request->id)
            ->update([
                'name' => $request->name,
            ]);

        if (!empty($request->oldPassword) ||
            !empty($request->password) ||
            !empty($request->password_confirmation)) {

            $this->validate($request, [
                'oldPassword' => ['required', new MatchOldPassword],
                'password' => ['required', 'confirmed', 'max:15'],
            ]);

            User::where('id', $request->id)
                ->update([
                    'password' => Hash::make($request->password),
                ]);

            echo "passwordnya sekarang "+auth()->user()->password;

        }

        return redirect()->route('profile', auth()->user());
    }
}
