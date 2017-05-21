<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 21.05.2017
 * Time: 19:57
 */
$mysqli = new mysqli('localhost', 'root', 'gfhjkmjn,fps','v_news');
if($mysqli->connect_errno){
    echo "Connect error";
    exit();
}
$mysqli->set_charset("utf8");