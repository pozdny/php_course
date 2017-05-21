<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 15.05.2017
 * Time: 21:00
 */
class Validator
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function userValidate($email, $pass) {
        if ($currentUser = $this->user->getUser($email)) {
            return true;
        }
    }

}