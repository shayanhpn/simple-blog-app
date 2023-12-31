<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function showCreatePost()
    {
        if(auth()->check())
        {
            return view('blog.create-post');
        }
        return back()->with('danger','ابتدا ثبت نام کرده و یا وارد حساب خود شوید');
    }

    public function createPost(Request $request)
    {
        $postFields = $request->validate([
            'title' => ['required'],
            'body' => ['nullable'],
            'post_image' => ['nullable','image','mimes:jpg,png,webp,jpeg'],
            'tags' => ['nullable'],
            'category' => ['required']
        ],[
            'title.required' => 'لطفا عنوان را وارد کنید',
            'body.required' => 'لطفا'
        ]);
        Post::create($postFields);
        return back()->with('success','نوشته شما با موفقیت منتشر شد');
    }
}
