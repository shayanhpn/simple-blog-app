<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Show My Account Page
    public function showMyAccount()
    {
        if(auth()->check())
        {
            return view('user.myaccount');
        }
        return back()->with('danger','ابتدا وارد شوید');
    }

}
