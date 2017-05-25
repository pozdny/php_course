<?php
$myslqi = new mysqli("localhost", "root", "", "php");

//$userData = htmlspecialchars($_POST['data']);

$userData = strip_tags($_POST['data']);
$query = "INSERT INTO test VALUES(null, '".$userData."')";
$myslqi->query($query);