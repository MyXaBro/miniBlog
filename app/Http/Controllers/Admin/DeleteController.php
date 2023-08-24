<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends Controller
{
    public function index(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
