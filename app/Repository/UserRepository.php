<?php

namespace App\Repository\Interfaces;

use App\Models\User;
use App\Repository\Interfaces\UserInterface as UserInterface;


class UserRepository implements UserInterface
{
    public $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->getAll();
    }


    public function find($id)
    {
        return $this->user->findUser($id);
    }


    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}
