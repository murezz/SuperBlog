<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home', [
            'title' => 'Halaman Home',
            'post' => Post::all()
        ]);
    }

    public function create()
    {
        return view('post.create', [
            'title' => 'Create blog'
        ]);
    }


    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->slug = Str::slug($post->title . '-');
        $post->body = $request->body;
        // $post->date = $request->date;
        $post->save();

        return redirect()->route('home')->with('success', 'New Post Created');
    }
}
