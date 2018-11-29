<?php
/*
 * 帖子模型观察器
 * */
namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostObserver{
    public function saving(Post $post){
        $post->description=post_desc($post->body);
        $post->body=clean($post->body, 'user_post_body');
    }
    //每添加成功一个帖子，贴子分类帖子数自增1
    /*public function saved(Post $post){
        dd($post);
        Category::where('id', $post->category_id)->increment('post_sums');
    }*/

    public function deleted(Post $post){
        DB::table('replies')->where('post_id', $post->id)->delete();
    }
}