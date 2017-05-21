<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.05.2017
 * Time: 11:16
 */
function testCallback($name){
    echo 'Hello '.$name;
}

testCallback('Vasya');
call_user_func('testCallback', 'Petya');