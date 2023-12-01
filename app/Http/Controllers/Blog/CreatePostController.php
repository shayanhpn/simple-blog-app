<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function showCreatePost()
    {
        return view('blog.create-post');
    }

    public function createPost()
    {

    }
}
