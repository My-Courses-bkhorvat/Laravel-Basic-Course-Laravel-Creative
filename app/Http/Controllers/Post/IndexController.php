<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(Post $post)
    {
        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }
}
