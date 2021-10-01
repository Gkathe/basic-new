<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        Paginator::useBootstrap();
        return view('posts',[
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    public function post(Post $post)
    {
        return view('post',['post' => $post]);
    }
}
