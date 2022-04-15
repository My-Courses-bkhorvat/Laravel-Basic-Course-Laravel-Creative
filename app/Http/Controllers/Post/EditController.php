<?php

namespace App\Http\Controllers\Post;

use App\Model\Category;
use App\Model\Post;
use App\Model\Tag;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
