<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }
}
