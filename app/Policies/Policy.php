<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;



    public function before($user, $ability){
        if ($user->hasAnyRole(['Founder','Maintainer'])){
            return true;
        }
        return false;
    }


}
