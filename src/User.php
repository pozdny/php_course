<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 15.05.2017
 * Time: 20:34
 */
class User{
    private $users = [];
    public function createUser($email, $pass){
        if(isset($this->users[$email])){
            return false;
        }
        if(strlen($pass) < 5){
            return false;
        }
        $this->users[$email] = [
            'email' => $email,
            'pass' => $pass
        ];
        return true;
    }
    public function getUser($email){
        return $this->users[$email];
    }

}
$user1 = new User();
$u = $user1->createUser('test@test.ru', 123456);
var_dump(($u));