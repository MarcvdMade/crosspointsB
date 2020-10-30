<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    //check if current user is the user of the profile
    public function isUserProfile(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }

    public function __construct()
    {
        //
    }
}
