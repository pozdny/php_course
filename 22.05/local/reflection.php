<?php

function test($x, $y) {
    return $x+$y;
}

$result = test(1,2);

//echo $result;

$reflection = new ReflectionFunction('test');
//var_dump($reflection);

//echo $reflection->getName();

//echo $reflection->getStartLine();

echo '<pre>';
Reflection::export($reflection);
echo '</pre>';
