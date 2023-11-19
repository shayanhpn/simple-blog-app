<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function showLogin()
    {
        return view('user.login-user');
    }

    public function loginUser(Request $request)
    {
        $loginFields = $request->validate([
            'login_email' => ['required','email'],
            'login_password' => ['required']
        ],[
            'login_email.required' => 'وارد کردن ایمیل الزامی است',
            'login_email.email' => 'لطفا ایمیل صحیح را وارد کنید',
            'login_password.required' => 'وارد کردن رمز عبور الزامی است',
        ]);
        if(auth()->attempt(['email' => $loginFields['login_email'],'password' => $loginFields['login_password']])){
            session()->regenerate();
            return redirect('/')->with('success','شما با موفقیت وارد شدید');
        }
        return redirect()->route('login')->with('danger','نام کاربری و یا کلمه عبور اشتباه می باشد');
    }
}
