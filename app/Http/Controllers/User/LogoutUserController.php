<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutUserController extends Controller
{
    public function showLogoutUser()
    {
        if(auth()->check())
        {
            auth()->logout();
            return view('user.logout-user');
        }
        return view('user.login-user');
    }

    public function logoutUser()
    {
        auth()->logout();
        return 'User Logged Out';
    }
}
