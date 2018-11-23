<?php
/*
 * 帖子模型观察器
 * */
namespace App\Observers;

use App\Models\Category;
use App\Models\Post;

class PostObserver{
    public function saving(Post $post){
        $post->description=post_desc($post->body);
    }
    //每添加成功一个帖子，贴子分类帖子数自增1
    public function saved(Post $post){
        Category::where('id', $post->category_id)->increment('post_sums');
    }
}