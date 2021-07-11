<?php


namespace App\Models;


class MessagesModel extends Model
{
    protected $id;
    private $message;
    private $created_at;
    private $user_id;

    public function __construct()
    {
        $this->table = 'messages';
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


    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }


    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }


    public function getUser_id(): int
    {
        return $this->user_id;
    }

    public function setUser_id($user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}