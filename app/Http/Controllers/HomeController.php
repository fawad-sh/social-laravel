<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        $messages = 100;
        $users = 2;
        return view('home',[
            'total_messages' => $messages,
            'total_users' => $users,
        ]);
    }
}
