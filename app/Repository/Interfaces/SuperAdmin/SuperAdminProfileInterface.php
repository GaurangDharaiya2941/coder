<?php

namespace App\Repository\Interfaces;

interface SuperAdminProfileInterface
{
    public function createProfile();

    public function changePassword();

    public function createAddress();

    public function createUserDetail();
}