<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 26.04.2017
 * Time: 20:51
 */
$ch = curl_init('https://ya.ru');
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$responseData = curl_exec($ch);
curl_close($ch);
var_dump($responseData);