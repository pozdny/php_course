<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.05.2017
 * Time: 12:13
 */
$timeStart = microtime(true);
//phpinfo();
$memcache = new Memcached();
$memcache->addServer('127.0.0.1', 11211);

