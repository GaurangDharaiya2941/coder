<?php

namespace App\Repository\Interfaces\Admin;

interface AdminProfileInterface
{
    public function createProfile();

    public function changePassword();

    public function createUserDetail();

    public function destroyProfile();

    public function destroyUserDetail();
}