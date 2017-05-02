<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 29.04.2017
 * Time: 15:07
 */

interface CreateFigure{
    public function draw();

}
class Circle implements CreateFigure{
    public function draw(){
        echo 'I draw Circle';
    }
}
class Triangle implements CreateFigure{
    public function draw(){
        echo 'I draw Triangle';
    }
}
class Ellipse implements CreateFigure{
    public function draw(){
        echo 'I draw Ellipse';
    }
}

class Factory{
    public function getFigure($type){
        switch ($type){
            case 'Ellipse':
                return new Ellipse;
                break;
            case 'Circle':
                return new Circle;
                break;
            case 'Triangle':
                return new Triangle;
                break;
        }
    }
}
$fabrika  = new Factory();
$obj = $fabrika->getFigure('Ellipse');
$obj->draw();

$obj = $fabrika->getFigure('Circle');
$obj->draw();