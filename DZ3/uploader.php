<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 27.04.2017
 * Time: 21:23
 */

//var_dump($_FILES);
$uploaddir = 'upload/';
$uploadfile = $uploaddir.basename($_FILES['myfile']['name']);
move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile);