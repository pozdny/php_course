<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 26.04.2017
 * Time: 20:08
 */
use basicpr;
require_once 'vendor/project/Basic.php';

try{
   if($obj = new basicpr\Basic()){
       var_dump($obj);
   }else{
       throw new \Exception('Class Basic error');
   }

}catch(Exception $e){
    echo 'Поймано исключение: ',  $e->getMessage(), "\n";
}