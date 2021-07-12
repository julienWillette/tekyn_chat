<?php


session_start();
unset($_SESSION['connecte']);
header('Location: /src/View/login.php');


