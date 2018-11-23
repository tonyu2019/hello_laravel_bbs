<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //列表页
    public function show(Request $request, Category $category){
        $posts = Post::where('category_id', $category->id)->withOrder($request->order)->paginate(20);
        return view('index.post.index', compact('category', 'posts'));
    }
}
