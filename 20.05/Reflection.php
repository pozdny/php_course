<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.05.2017
 * Time: 14:58
 */
class NewsController
{
    public $a = 10;
    public function actionIndex(){
        echo "News Controller";
    }
}
$news = new NewsController();
var_dump($news);
$reflection = new ReflectionClass('NewsController');
var_dump($reflection);
$method = $reflection->getMethod('actionIndex');
var_dump($method);
echo '<hr>';
if($reflection->hasMethod('reflection')){
    echo 'Метод существует';
}
else{
    echo 'Метод не существует';
}