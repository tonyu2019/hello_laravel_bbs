<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 2018/11/28
 * Time: 10:27
 */

namespace App\Observers;



use App\Models\Reply;
use App\Notifications\PostReplied;

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_post_body');
    }
    //回复成功文章回复数+1
    public function saved(Reply $reply){
        $reply->post->increment('reply_count');
        //通知作者，有新的回复
        $reply->post->user->notify(new PostReplied($reply));
    }

    //删除回复文章回复数-1
    public function deleted(Reply $reply){
        $reply->post->decrement('reply_count');
    }
}