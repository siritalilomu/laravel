<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
      // $posts = Post::all();
      $posts = Post::latest()->get();
      // $post = Post::orderBy('created_at', 'desc')->get();
      return view('posts.index', compact('posts'));
    }

    // public function show($id)
    // {
    //   $post = Post::find($id);
    //   return view('posts.show', compact('post'));
    // }

    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {
      // validation
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      // Create a new post using the request data

      // dd(request()->all());
      // dd(request(['title', 'body']));
      // $post = new Post;
      // $post->title = request('title');
      // $post->body = request('body');

      // Save it to the database
      // $post->save();

      Post::create(request(['title', 'body']));

      // redirect to the home page.
      return redirect('/');

    }
}
