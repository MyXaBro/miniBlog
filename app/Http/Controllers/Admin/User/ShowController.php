<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(User $user)
    {
        return view('admin.user.show', compact('user'));
    }
}
