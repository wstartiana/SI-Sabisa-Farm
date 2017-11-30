<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }


    public function create()
    {
        return view('post.create');

    }

    public function store()
    {
        Post::create([
          'nama'=> request('nama'),
          'jumlah'=> request('jumlah')
        ]);

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {

      return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {

      $post->update([
        'nama'=> request('nama'),
        'jumlah'=> request('jumlah')
      ]);

      return redirect()->route('post.index');
    }
    public function delete(Post $post)
    {
      $post->delete();

      return redirect()->route('post.index');
    }
}
