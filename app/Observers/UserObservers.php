<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 2018/11/30
 * Time: 14:52
 */

namespace App\Observers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserObservers
{
    public function saving(User $user){
        $user->password=Hash::make($user->password);
        $user->intro=clean($user->intro, 'user_post_body');
    }
}