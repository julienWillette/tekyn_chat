<?php


namespace App\Controllers;

use App\Models\UsersModel;

class UsersController
{
    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function allUsers()
    {
        $users = $this->usersModel->findAll();

        require __DIR__ .'/../Views/sidebar.php';
    }
}