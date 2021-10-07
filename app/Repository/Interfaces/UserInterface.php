<?php

namespace App\Repository\Interfaces;

interface UserInterface {

    public function getAll();

    public function find($id);

    public function delete($id);
}
