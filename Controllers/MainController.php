<?php

namespace App\Controllers;

use App\Models\UsersModel;

class MainController
{
    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function login()
    {
        require __DIR__ .'/../Views/login.php';
    }

    public function chat()
    {
        $users = $this->usersModel->findAll();

        require __DIR__ .'/../Views/chat.php';
    }


    public function show(int $id)
    {
        $user = $this->usersModel->find($id);

        require __DIR__ . '/../Views/show.php';
    }

}