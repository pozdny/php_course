<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 22.05.2017
 * Time: 19:46
 */
$mysqli = new mysqli('localhost', 'root', '','php');
$userData = htmlspecialchars($_POST['data']); echo $userData;
$query = "INSERT INTO test (text) VALUES('".$userData."')";
$mysqli->query($query);


