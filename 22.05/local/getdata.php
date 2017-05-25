<?php
$myslqi = new mysqli("localhost", "root", "", "php");

$query = "SELECT text FROM test WHERE id=3";
$result = $myslqi->query($query);
$row = $result->fetch_assoc();
echo $row['text'];
