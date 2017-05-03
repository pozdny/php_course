<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 03.05.2017
 * Time: 19:10
 */


//Абстрактная фабрика
/*
* есть абстрактный продукт
* есть конкретная реализация продукта на основе абстракции
* есть некоторая абстрактная фабрика
* есть конкрентая фабрика под продукт
* есть какой-то создающий код (создатель)
*/

//есть абстрактный продукт
abstract class Computer
{
    public abstract function getCpu();
    public abstract function getMemory();
    public abstract function getDisk();
    public abstract function getFactor();
}
//есть некоторая абстрактная фабрика
abstract class ComputerAbstractFactory{
    abstract function create();
}
//есть конкретная реализация продукта на основе абстракции
class PersonalComputer extends Computer{
    public function getCpu(){
        echo 'PersonalComputer CPU';
    }
    public function getMemory(){
        echo 'PersonalComputer Memory';
    }
    public function getDisk(){
        echo 'PersonalComputer Disk';
    }
    public function getFactor(){
        echo 'PersonalComputer Factor';
    }
}
//есть конкретная реализация продукта на основе абстракции
class AppleComputer extends Computer{
    public function getCpu(){
        echo 'AppleComputer CPU';
    }
    public function getMemory(){
        echo 'AppleComputer Memory';
    }
    public function getDisk(){
        echo 'AppleComputer Disk';
    }
    public function getFactor(){
        echo 'AppleComputer Factor';
    }
}
//есть конкрентая фабрика под продукт
class PersonalFactory extends ComputerAbstractFactory{
    public function create(){
        return new PersonalComputer();
    }
}
//есть конкрентая фабрика под продукт
class AppleFactory extends ComputerAbstractFactory{
    public function create(){
        return new AppleComputer();
    }
}
//есть какой-то создающий код (создатель)
class ComputerFactory{
    public function getFactory($type){
        switch ($type){
            case 'pc':
                $factory = new PersonalFactory();
                break;
            case 'apple':
                $factory = new AppleFactory();
                break;

        }
        return $factory;
    }
}

$appleFactory = new ComputerFactory();
$apple1 = $appleFactory->getFactory('apple');
$apple2 = $appleFactory->getFactory('apple');

$pc1 = $appleFactory->getFactory('pc');
$pc2 = $appleFactory->getFactory('pc');
var_dump($apple1);
var_dump($apple2);
var_dump($pc1);
var_dump($pc2);