<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "tittle" =>"All Posts",
            "active" => "posts",
            //"posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            'tittle' => "Single Post",
            "active" => "posts",
            'post'=> $post
        ]);
    }
}
