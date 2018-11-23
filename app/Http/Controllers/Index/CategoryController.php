<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    //列表页
    public function show(Category $category){
        $posts = Post::where('category_id', $category->id)->with('category', 'user')->paginate(20);
        return view('index.post.index', compact('category', 'posts'));
    }
}
