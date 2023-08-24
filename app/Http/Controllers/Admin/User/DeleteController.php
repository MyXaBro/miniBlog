<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class DeleteController extends Controller
{
    public function index(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
