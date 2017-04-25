<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 25.04.2017
 * Time: 22:15
 */
abstract class GlobalClass
{
    public static function createObject() {
        return new self();
    }

}
class ConcreteClass1 extends GlobalClass
{
    public static function createObject() {
        return new self();
    }
}

class ConcreteClass2 extends GlobalClass
{
    public static function createObject() {
        return new self();
    }
}


var_dump(ConcreteClass1::createObject());
var_dump(ConcreteClass2::createObject());