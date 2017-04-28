<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 27.04.2017
 * Time: 21:25
 */
?>
    <form action = "" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Post">
    </form>
<?php

if(isset($_FILES['image']['tmp_name']) && $_FILES['image']['name'] !='' ){
    $curl = curl_init();
    $target="http://194.226.171.166/upload/pozdny/upload.php";

    // Create a CURLFile object / oop method
    $cfile = new CURLFile($_FILES['image']['tmp_name'],$_FILES['image']['type'],$_FILES['image']['name']); // uncomment and use if the upper procedural method is not working.

    // Assign POST data
    $imgdata = array('myimage' => $cfile);

    curl_setopt($curl, CURLOPT_URL, $target);
    curl_setopt($curl, CURLOPT_POST, true); // enable posting
    curl_setopt($curl, CURLOPT_POSTFIELDS, $imgdata); // post images

    $response = curl_exec($curl);
    if($response === true){
        echo 'file upload';
        unset($_FILES['image']);
    }
    else
        echo 'error'. curl_error($curl);
    curl_close($curl);


}








