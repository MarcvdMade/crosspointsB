<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    //check if current user is the user of the profile
    public function myProfile(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }
}
