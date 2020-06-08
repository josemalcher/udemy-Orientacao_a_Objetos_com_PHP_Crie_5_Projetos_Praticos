<?php

namespace Code\DB;

class Connection
{
    private static $instance = null;

    /**
     * Connection constructor.
     */
    private function __construct()
    {
    }

    public static function getInstace()
    {
        if(is_null(self::$instance)){
            self::$instance = new \PDO('mysql:dbname=formacao_php;host=localhost', 'root', '');
            self::$instance->exec('SET NAMES UTF8');
        }

        return self::$instance;
    }

}
