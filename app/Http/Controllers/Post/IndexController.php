<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Post;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
}