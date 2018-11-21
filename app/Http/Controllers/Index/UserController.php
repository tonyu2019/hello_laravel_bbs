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

    //用户修改个人资料页面
    public function edit(User $user){
        return view('index.user.edit', compact('user'));
    }

    //用户修改行为
    public function update(Request $request, User $user){
        $user->name=$request->name;
        $user->intro=$request->intro;
        $user->save();
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功');
    }
}
