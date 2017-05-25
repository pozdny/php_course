<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 22.05.2017
 * Time: 19:48
 */

$mysqli = new mysqli('localhost', 'root', '','php');
$query = "SELECT text FORM test WHERE id=2";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
echo $row['text'];
