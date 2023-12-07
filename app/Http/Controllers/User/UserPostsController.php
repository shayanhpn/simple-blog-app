<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class UserPostsController extends Controller
{
    public function showUsersPosts()
    {
        if(auth()->check())
        {
            $posts = Post::all()->where('user_id',auth()->user()->id);
            return view('user.my-posts',compact('posts'));
        }
        return back()->with('danger','شما مجوز دسترسی به این بخش را ندارید');
    }
}
