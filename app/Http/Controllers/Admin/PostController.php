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

    public function destroy(Post $post)
    {
        $this->authorize('post_del');
        $post->delete();
        return redirect()->route('admin.posts')->with('success', '帖子成功删除');
    }
}
