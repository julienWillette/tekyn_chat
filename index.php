<?php

use \App\Autoloader;
use \App\Models\UsersModel;
use \App\Models\MessagesModel;

require_once 'Autoloader.php';

Autoloader::register();

$messages = new MessagesModel();

$msg = $messages
    ->setMessage('Bonjour');

$messages->hydrate((array)$msg);

var_dump($messages);