<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\FilterRequest;

class StoreController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('post.index');
    }
}
