<?php


class Database {
    private static $pdo;

    public static function getPdo(){
        if(self::$pdo === null){
                $pdo = new PDO("mysql:host=127.0.0.1;dbname=hido;charset=utf8", "admin", "admin");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo = $pdo;
        } else {
            $pdo = self::$pdo;
        }
        return $pdo;
    }
}