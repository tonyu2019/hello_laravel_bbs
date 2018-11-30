<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;

class PostController extends BaseController
{
    public function index(){
        $this->authorize('post_index');
        $posts=Post::with('user', 'category')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }
}
