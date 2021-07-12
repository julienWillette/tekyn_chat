<?php

namespace App\Models;

use App\Models\MessagesModel;


class UsersModel extends Model
{

    protected $id;
    protected $username;
    protected $firstname;
    protected $lastname;
    protected $picture;

    public function __construct()
    {
        $this->table = 'users';
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }


    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }


    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }


    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }


    public function getPicture(): string
    {
        return $this->picture;
    }

    public function setPicture($picture): self
    {
        $this->picture = $picture;

        return $this;
    }


}

