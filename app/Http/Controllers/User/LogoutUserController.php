<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutUserController extends Controller
{
    // Show Accept Logout Page
    public function showLogoutUser()
    {
        if(auth()->check())
        {
            auth()->logout();
        }
        return view('user.login-user');
    }

    public function logoutUser()
    {
        auth()->logout();
    }
}
