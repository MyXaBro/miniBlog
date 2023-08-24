<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function index(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('user.index');
    }
}
