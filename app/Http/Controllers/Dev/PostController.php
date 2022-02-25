<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('id', 'ASC')->get();
        return Inertia::render('Dev/Post/Index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return Inertia::render('Dev/Post/Create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return Redirect::route('dev.post.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        
        return Redirect::route('dev.post.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return Inertia::render('Dev/Post/Edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return Redirect::route('dev.post.index');
    }
}
