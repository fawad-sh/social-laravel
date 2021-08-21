<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        $messages = Post::count();
        $users = User::count();
        return view('home',[
            'total_messages' => $messages,
            'total_users' => $users,
        ]);
    }
}
