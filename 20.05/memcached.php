<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.05.2017
 * Time: 11:49
 */
$memcache = new Memcached();
$memcache->addServer('127.0.0.1', 11211);
$memcache->add("test", "test value");
var_dump($memcache);