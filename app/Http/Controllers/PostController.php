<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $posts = DB::table('posts')->get();
        $posts = POST::orderBy('created_at', 'desc')->get();

        return view('user.dashboard', [
            'posts' => $posts,
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'body' => 'required|max:100',
        ]);

        // Post::create([
        //     'body' => $request->body,
        // ]);

        auth()->user()->posts()->create([
            'body' => $request->body,
        ]);

        // dd($request);
        return back();
    }
}
