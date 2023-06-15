<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = $user->posts()->get();
        // $posts = $user->posts;
        return view('users.posts.index', compact('posts'));
    }
}
