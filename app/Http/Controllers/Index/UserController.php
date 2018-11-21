<?php

namespace App\Http\Controllers\Index;


use App\Handlers\UploadHandler;
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
    public function update(Request $request, UploadHandler $upload, User $user){
        $this->validate($request, [
            'name'  => 'required|max:30',
            'intro' => 'nullable|max:80',
            'avatar'=> 'mimes:jpeg,png,gif|dimensions:min_width=150,min_height=150,max_width=350,max_height=350|max:200'
        ],[
            'avatar.mimes' =>'头像必须是 jpeg, png, gif 格式的图片',
            'avatar.dimensions' => '图片尺寸必须150到350px之间',
            'avatar.max' => '图片不能超过200K',
            'intro.max' => '个人简介过长',
            'name.max' => '姓名过长',
            'name.required' => '姓名不能为空。',
        ]);
        $user->name=$request->name;
        $user->intro=$request->intro;
        //判断是否上传头像
        if ($request->hasFile('avatar')){
            //用户上传新头像，如果有老头像，则删除头像
            if (file_exists(public_path().$user->avatar)){
                unlink(public_path().$user->avatar);
                }
            $user->avatar=$upload->save($request->avatar, 'avatar', $user->id);
        }
        $user->save();
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功');
    }
}
