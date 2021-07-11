<?php

namespace App\Core;

use PDO;
use PDOException;

class Db extends PDO
{

    /**
     * @var Db
     */
    private static $instance;

    private const DBHOST = '127.0.0.1';
    private const DBUSER = 'root';
    private const DBPASS = 'root';
    private const DBNAME = 'tekyn_chat';

    private function __construct()
    {

        $_dsn = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;

        try {
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}