<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'content' => 'required|min:1',
        ]);

        $user = auth()->user();

        Comment::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('show', ['post' => $post->id])
            ->with('success', 'Комментарий успешно добавлен');
    }}
