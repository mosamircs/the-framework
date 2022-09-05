<?php
namespace App\Database;
use Database\Connection;

class DB extends Config
{
    private static $connection;
    
    private function __construct(Connection $connection)
    {
        self::$connection = $connection;
    }

    public static function getConnectionInstance()
    {
        if (self::$connection){
            return self::$connection;
        }else {
            self::$connection = new PDO("mysql:host=Config::HOST;dbname=Config::DATABASENAME",Config::USERNAME,Config::PASSWORD);
        }
    }
}