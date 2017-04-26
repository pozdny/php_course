<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 25.04.2017
 * Time: 22:15
 */
abstract class GlobalClass
{
    public $object;
    public function getObject(){
        return $this->object;
    }

}
class ConcreteClass1 extends GlobalClass
{
    public $prop = 'prop';
    public function __construct()
    {
        $this->object = $this;
    }
}

class ConcreteClass2 extends GlobalClass
{
    private $prop = 'prop2';
    public function __construct()
    {
        $this->object = $this;

    }
}

//new GlobIterator();
$class = new ConcreteClass1();
$class2 = new ConcreteClass2();
var_dump($class->getObject());
var_dump($class2->getObject());
//var_dump(ConcreteClass2::createObject());