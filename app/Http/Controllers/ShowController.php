<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class ShowController extends Controller
{
    public function index(Post $post)
    {
        $comments = Comment::where('post_id', $post->id)->orderBy('created_at', 'asc')->get();
        return view('show', compact('post', 'comments'));
    }
}
