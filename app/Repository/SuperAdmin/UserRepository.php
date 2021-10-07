<?php

namespace App\Repository\SuperAdmin;

use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserProfile;
use App\Repository\Interfaces\SuperAdmin\UserInterface;

class UserRepository implements UserInterface
{
    private $user ,$profile, $detail;

    public function __construct(User $user, UserProfile $profile, UserDetail $detail)
    {
        $this->user = $user;
        $this->profile = $profile;
        $this->detail = $detail;
    }

    public function updateProfile($request)
    {
        dd($request);
    }
}