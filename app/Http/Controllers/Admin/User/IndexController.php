<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }
}
