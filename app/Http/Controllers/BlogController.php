<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function home() {
        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->article = $request->article;

        $post->save();

        return redirect('/');
    }

    public function show($id) {
        $post = Post::find($id);

        return view('show', ['post' => $post]);
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete;
        return rediret('/');
    }
    
}
