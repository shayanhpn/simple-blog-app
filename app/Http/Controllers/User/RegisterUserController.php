<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    // Show Register User Page
    public function showRegisterUser()
    {
        return view('user.register-user');
    }

    // Register User Function
    public function registerUser(Request $request)
    {
       $registerFields =  $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['email','required','unique:users'],
            'password' => ['required','confirmed']
        ],[
            'firstname.required' => 'وارد کردن نام الزامی است',
            'lastname.required' => 'وارد کردن نام خانوادگی الزامی است',
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'لطفا ایمیل معتبر وارد کنید',
            'email.unique' => 'این ایمیل قبلا انتخاب شده است',
            'password.required' => 'وارد کردن کلمه عبور الزامی است',
            'password.confirmed' => 'کلمه عبور یکسان نیست'
       ]);
       $user = User::create($registerFields);
       auth()->login($user);
       return redirect('/')->with('success','ثبت نام شما با موفقیت صورت گرفت');

    }
}
