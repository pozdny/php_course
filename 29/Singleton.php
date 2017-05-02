<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 29.04.2017
 * Time: 14:53
 */
class Singleton
{
    private static $_instance;

    private function __construct()
    {
    }
    public static function getInstance(){
        if(self::$_instance == null){
            self::$_instance = new self;

        }
        return self::$_instance;
    }
    public function write($log){
        file_put_contents('log.txt', $log, FILE_APPEND);

    }
    private function __clone(){}
}
$fileLog = Singleton::getInstance();
$fileLog->write('Hi'."\n");
var_dump($fileLog);