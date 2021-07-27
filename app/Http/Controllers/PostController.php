<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($post->title . '-');
        $post->body = $request->body;
        $post->date = $request->date;
    }
}
