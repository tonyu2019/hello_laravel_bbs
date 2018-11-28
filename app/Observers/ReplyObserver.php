<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 2018/11/28
 * Time: 10:27
 */

namespace App\Observers;



use App\Models\Reply;

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_post_body');
    }
    //回复成功文章回复数+1
    public function saved(Reply $reply){
        $reply->post->increment('reply_count');
    }

    //删除回复文章回复数-1
    public function deleted(Reply $reply){
        $reply->post->decrement('reply_count');
    }
}