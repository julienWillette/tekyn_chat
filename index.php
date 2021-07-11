<?php

use \App\Autoloader;
use \App\Models\UsersModel;

require_once 'Autoloader.php';

Autoloader::register();

$users = new UsersModel();

$users->delete(13);