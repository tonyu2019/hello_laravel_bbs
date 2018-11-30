<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;

class UserController extends BaseController
{
    public function index(){
        $users=User::paginate(10);
        return view('admin.user.index', compact('users'));
    }
}
