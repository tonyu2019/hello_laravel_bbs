<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index(){
        $notifications=Auth::user()->notifications()->paginate(10);
        // 标记为已读，未读数量清零
        Auth::user()->markAsRead();
        return view('index.notifications.index', compact('notifications'));
    }
}
