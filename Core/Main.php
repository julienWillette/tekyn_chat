<?php


namespace App\Core;


use App\Controllers\MainController;
use App\Controllers\UsersController;

class Main
{
    public function start()
    {

        $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ('/' === $urlPath) {
            (new MainController)->login();
        }

        elseif ('/chat' === $urlPath) {
            (new MainController)->chat();
        }
        elseif ('/show' === $urlPath && isset($_GET['id'])) {
            (new MainController)->show($_GET['id']);
        }
        else {
            header('HTTP/1.1 404 Not Found');
        }
    }
}
