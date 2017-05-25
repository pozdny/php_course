<?php

class User {
    private $name;
    private $email;

    public function getName() {
        echo "name";
    }

    public function getEmail() {
        echo "Email";
    }

}
$class = new ReflectionClass('User');

$methods = $class->getMethods();
var_dump($methods);

$properties = $class->getProperties();
var_dump($properties);

//Список методов
// Список свойств