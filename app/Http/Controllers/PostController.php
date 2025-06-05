<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\HTTP\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(5)]);
    }
    //

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('post create');
    }
}
