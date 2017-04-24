<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 24.04.2017
 * Time: 19:22
 */
class Writer
{
    public function write() {
        echo 'Метод write класса Writer';

    }
}

class Potomok1 extends Writer{
    public function write() {
        echo 'Метод write класса Potomok1';

    }
}
class Potomok2 extends Writer{
    public function write() {
        echo 'Метод write класса Potomok2';

    }
}