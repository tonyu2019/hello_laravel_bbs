<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts=Post::with('user', 'category')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }
}
