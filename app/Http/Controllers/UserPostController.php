<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserPostController extends Controller
{
    public function index($id)
    {
        $posts = Post::where('user_id', $id)->get();
        return view('users.posts.index', compact('posts'));
    }
}
