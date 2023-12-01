<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    // Show Edit User Page
    public function showEditUser(User $id)
    {
        return view('user.edit-user',['user'=>$id]);
    }

    public function editUser(User $user,Request $request)
    {
        $editUserFields = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
        ]);
        $user->update($editUserFields);
        $user->save();
        return back()->with('success','مشخصات شما ویرایش شد');
    }
}
