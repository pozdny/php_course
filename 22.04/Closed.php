<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 24.04.2017
 * Time: 19:25
 */
class Closed
{
    private $user = 'Alex';
	private $years  ='30';
    public function getName(){
        return $this->user;
    }
    public function getAge(){
        return $this->years;
    }
}

$userInfo = new Closed();
$name = $userInfo->getName();
$age = $userInfo->getAge();