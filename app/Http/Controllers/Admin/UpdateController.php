<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function index(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);

        return view('admin.post.show', compact('post'));
    }
}
