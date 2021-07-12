<?php


namespace App\Controllers;


class UsersController
{


    public function show(int $id)
    {



        require __DIR__ . '/../Views/show.php';
    }
}