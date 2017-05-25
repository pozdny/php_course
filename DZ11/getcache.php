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
print_r($memcache->get('news'));
echo "</pre>";
