<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 27.04.2017
 * Time: 21:25
 */
?>

<?php


    /*$curl = curl_init();
    $target="http://95.191.131.10/uploader.php";
    $cfile = new CURLFile('upload.png'); // uncomment and use if the upper procedural method is not working.

// Create a CURLFile object / oop method

    // Assign POST data
    $imgdata = array('myfile' => $cfile);

    curl_setopt($curl, CURLOPT_URL, $target);
    curl_setopt($curl, CURLOPT_POST, true); // enable posting
    curl_setopt($curl, CURLOPT_POSTFIELDS, $imgdata); // post images

    curl_exec($curl);

    curl_close($curl);*/




$ch = curl_init('http://www.ipvoid.com/ip-blacklist-check/');
$data = ['ip' => '194.226.171.166'];
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_exec($ch);
curl_close($ch);












