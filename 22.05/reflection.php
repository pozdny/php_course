<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 22.05.2017
 * Time: 19:23
 */
function test($x, $y){
    return $x+$y;
}

echo test(2,3);


$reflection = new ReflectionFunction('test');
//var_dump($reflection);
//$reflection->getName();
//echo $reflection->getStartLine();

echo '<pre>';
Reflection::export($reflection);
echo '</pre>';

