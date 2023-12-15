<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ViewPostController extends Controller
{
    public function showAllPosts()
    {
        return view();
    }

    public function showSinglePost(Post $id)
    {
        return view('blog.view-post',['post' => $id]);
    }

}
