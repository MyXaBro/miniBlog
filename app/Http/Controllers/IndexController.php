<?php

namespace App\Http\Controllers;

use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
            $posts = Post::all();
            return view('index', compact('posts'));
    }
}
