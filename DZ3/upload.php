<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 27.04.2017
 * Time: 21:23
 */

if(isset($_FILES['myimage']['tmp_name'])){
    $path = "/var/www/html/upload/pozdny/img/".$_FILES['myimage']['name'];
    move_uploaded_file($_FILES['myimage']['tmp_name'], $path);

}