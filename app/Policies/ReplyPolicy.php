<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReplyPolicy extends Policy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can delete the reply.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Reply  $reply
     * @return mixed
     */
    public function delete(User $user, Reply $reply)
    {
        //dd($user->id, $reply->user);
        return $user->id==$reply->user->id;
    }
}
