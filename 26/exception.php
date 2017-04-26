<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 26.04.2017
 * Time: 19:31
 */
// Exception
//throw new Exception('Текст');
//try catch
/**/

class MyExp extends Exception{
    public function __consturct($message){
        echo "Error message - $message";
    }
}
$a = 10; $b = 100;
try{
    if($a !=$b){
        throw new MyExp('Error: a !=b');
    }
}
catch(MyExp $e){
    echo $e->getMessage();
    echo '<br>';
    echo $e->getLine();
}

