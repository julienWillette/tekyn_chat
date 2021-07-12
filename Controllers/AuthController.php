<?php


function is_connected(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function user_not_connect(): void
{
    if (!is_connected()) {
        header('Location: login.php');
        exit();
    }
}

function user_connect(): void
{
    if (is_connected()) {
        header('Location: chat.php');
        exit();
    }
}