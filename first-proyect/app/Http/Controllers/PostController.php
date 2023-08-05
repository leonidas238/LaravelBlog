<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post'=> $post]);
    }
    
    public function create(Post $post)
    {
        return view('posts.create', ['post'=> new Post]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ], [
            'title.required' => ':attribute null!!',
            'body.required' => ':attribute null!!',
        ]);

        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        session()->flash('status', 'Post created!');

        return to_route('posts.index');
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ], [
            'title.required' => ':attribute null!!',
            'body.required' => ':attribute null!!',
        ]);

        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        session()->flash('status', 'Post update!');

        return to_route('posts.show', $post);    
    }
}