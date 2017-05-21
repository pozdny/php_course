<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 24.04.2017
 * Time: 19:16
 */
Interface ClassInfo {
    public function getClassName();
}

class Info implements ClassInfo
{
    public function getClassName(){
        echo 'Info';
    }
}

$info = new Info();
$info->getClassName();