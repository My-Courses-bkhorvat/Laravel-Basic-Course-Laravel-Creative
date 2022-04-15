<?php

namespace App\Http\Controllers\Post;

use App\Model\Category;
use App\Model\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }
}
