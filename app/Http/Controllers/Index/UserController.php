<?php

namespace App\Http\Controllers\Index;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    //用户个人信息页面
    public function show(User $user){
        return view('index.user.show', compact('user'));
    }
}
