<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function showEditUser(User $id)
    {
        return view('user.edit-user',['user'=>$id]);
    }

    public function editUser()
    {

    }
}
