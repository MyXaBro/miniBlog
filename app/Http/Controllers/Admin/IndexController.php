<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['postsCount'] = Post::all()->count();
        $data['usersCount'] = User::all()->count();

        return view('admin.index', compact('data'));
    }
}
