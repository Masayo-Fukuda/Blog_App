<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // if (Auth::attempt($request)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('posts.index');
        // } else {
        //     return redirect()->back()->withErrors([
        //         'email' => 'Failed login.',
        //     ]);
        // }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('posts.index');
        }
        
        return redirect()->back()->withErrors([
            'email' => 'Failed login.',
        ]);
    }
}
