<?php

namespace App\Repository\SuperAdmin;

use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserProfile;
use App\Repository\Interfaces\SuperAdminProfileInterface;

class SuperAdminProfileRepository implements SuperAdminProfileInterface
{
    private $user, $profile, $detail;

    public function __construct(User $user, UserProfile $profile, UserDetail $detail) {
        $this->user = $user;
        $this->profile = $profile;
        $this->detail = $detail;
    }

    public function createProfile() {

        if ($this->user->where('user_id', auth()->user()->user_id)->first()) {
            //
        } else {
            //
        }
    }

    public function changePassword() {

    }

    public function createAddress() {

    }

    public function createUserDetail() {

    }
}