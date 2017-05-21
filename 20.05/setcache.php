<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.05.2017
 * Time: 12:13
 */
$timeStart = microtime(true);
$memcache = new Memcached();
$memcache->addServer('127.0.0.1', 11211);

$mysqli = new mysqli('localhost', 'root', 'gfhjkmjn,fps','v_news');
if($mysqli->connect_errno){
    echo "Connect error";
    exit();
}
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT id, name FROM b_iblock_element WHERE NAME LIKE '%ночь%' LIMIT 200");
echo "Количество строк: ".$result->num_rows; echo '<br>';


$arr = [];
while($row = $result->fetch_assoc()){
    $arr[] = $row;
}
$memcache->set('sql'.$i, $arr);
/*for($i = 0; $i < count($arr); $i++){
    $memcache->set('sql_'.$i, $arr[$i]);
}*/
echo "Использовано памяти, Кб ". memory_get_usage()/1024; echo '<br>';
$timeEnd = microtime(true);
$time = $timeEnd-$timeStart;
echo "Выполнил $time секунд";