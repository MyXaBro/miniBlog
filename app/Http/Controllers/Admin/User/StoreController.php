<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
        public function index(UserStoreRequest $request)
    {
        $data = $request->validated();

        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ];

       User::create($userData);

        return redirect()->route('user.index');
    }
}
