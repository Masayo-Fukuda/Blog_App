<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user_info = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($user_info)) {
            $request->session()->regenerate();
            return redirect()->route('posts.index');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Failed login.',
            ]);
        }
    }
}
