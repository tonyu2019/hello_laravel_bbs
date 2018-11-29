<?php
namespace App\Http\Controllers\Index;

use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends BaseController
{
    //
    public function store(Request $request, Reply $reply){
        $reply->post_id=$request->post_id;
        $reply->content=$request->content;
        $reply->user_id=Auth::id();
        $reply->save();
        return back()->with('success', '回复成功');
    }

    public function destroy(Reply $reply){
        $this->authorize('delete', $reply);
        $reply->delete();
        return back()->with('success', '删除回复成功');
    }
}
