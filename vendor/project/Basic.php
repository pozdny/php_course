<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 26.04.2017
 * Time: 20:02
 */
namespace basicpr;
class Basic {
    public function __construct()
    {
        try{
            if(!file_exists('config.ini')){
                throw new \Exception('File config.ini dosn\'t exist');
            }
            else{
                // do
            }

        }catch(Exception $e){
            echo 'Поймано исключение: ',  $e->getMessage(), "\n";
        }
    }
}