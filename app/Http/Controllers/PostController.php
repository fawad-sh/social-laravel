<?php

namespace App\Http\Controllers;

use App\Http\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        // $posts = Post::get(); // all posts
        $posts = Post::orderBy('updated_at', 'desc')->paginate(50);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'body' => $request->body,
            'reply' => '',
        ]);

        return back();
    }

    public function show(Post $post)
    {
        //dd('show method', $post);
        return view('posts.show', ['post' => $post]);
        //return view('posts.reply', ['post' => $post]);
    }

    public function reply(Post $post)
    {
        return view('posts.reply', ['post' => $post]);
    }

    public function updateReply(Request $request, $post)
    {
        //dd($post, $request->body);
        $this->validate($request, [
            'reply' => 'required'
        ]);

        $post = Post::find($post);
        $post->reply = $request->reply;

        $post->save();

        return redirect('posts');
    }

    public function update(Request $request,  $post)
    {
        //dd($post, $request->body);
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = Post::find($post);
        $post->body = $request->body;

        $post->save();

        return redirect('posts');
    }
}
