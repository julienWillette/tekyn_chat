<?php

namespace App\Controllers;

use App\Models\UsersModel;

class MainController
{
    public function login()
    {
        require __DIR__ .'/../Views/login.php';
    }

    public function chat()
    {
        $users = $this->usersModel->findAll();

        require __DIR__ .'/../Views/chat.php';
    }
}