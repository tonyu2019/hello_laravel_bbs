<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;

class PostController extends BaseController
{
    public function index(){
        $posts=Post::with('user', 'category')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }
}
