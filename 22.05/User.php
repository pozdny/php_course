<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 22.05.2017
 * Time: 19:32
 */
class User
{
    private $name;
    private $email;
    public function getName(){
        echo 'name';
    }
    public function getEmail(){
        echo 'email';
    }
}
$class = new ReflectionClass('User');

$methods = $class->getMethods();
var_dump($methods);

$properties = $class->getProperties();
var_dump($properties);