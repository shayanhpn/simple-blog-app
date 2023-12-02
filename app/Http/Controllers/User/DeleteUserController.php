<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class DeleteUserController extends Controller
{
    public function showDeleteUser()
    {
        if(auth()->check())
        {
            return view('user.delete-account');
        }
        return back()->with('danger','ابتدا باید وارد شوید');
    }

    public function deleteUser(User $user)
    {
        if(auth()->check() && auth()->check() == $user->id)
        {
            $user->delete();
            session()->flush();
            return redirect()->route('main')->with('success','حساب کاربری شما با موفقیت حذف شد');
        }
        return back()->with('danger','شما دسترسی مورد نظر برای این عملیات را ندارید');

    }
}
