<?php

namespace App\Http\Controllers;

use App\Http\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {

        // $posts = Post::get(); // all posts
        $posts = Post::latest()->paginate(50);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'body' => $request->body,
            'reply' => '',
        ]);

        return back();
    }

    public function save(Request $request, Post $post) {
       $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->save([
            'body' => $request->body
        ]);

        return back();
    }

}
