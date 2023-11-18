<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function showRegisterUser()
    {
        return view('user.register-user');
    }

    public function registerUser(Request $request)
    {
       $registerFields =  $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['email','required','unique:users'],
            'password' => ['required','confirmed']
        ]);
       User::create($registerFields);

    }
}
