<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->simplepaginate(5);
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => ['required', 'max:30'],
            'body' => ['required', 'max:140'],
        ]);


        if ($validator) {
            $post = new Post;
            $post -> user_id = Auth::id();
            $post -> title = $request ->title;
            $post -> body = $request -> body;

            $post -> save();

            return redirect()->route('posts.index');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'title' => ['required', 'max:30'],
            'body' => ['required', 'max:140'],
        ]);

        if ($validator) {
            $post = Post::find($id);
            $post -> title = $request ->title;
            $post -> body = $request -> body;

            $post -> save();

            return redirect()->route('posts.index');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
