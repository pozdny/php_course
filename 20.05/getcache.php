<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.05.2017
 * Time: 11:57
 */
$timeStart = microtime(true);
$memcache = new Memcached();
$memcache->addServer('127.0.0.1', 11211);
echo "<pre>";
print_r($memcache->get('sql'));
echo "</pre>";
echo "Использовано памяти, Кб ".memory_get_usage()/1024;echo '<br>';
$timeEnd = microtime(true);
$time = $timeEnd-$timeStart;
echo "Выполнил $time секунд";
//echo $memcache->get('test');

//var_dump(array('k1', 'k3', 'k3'));