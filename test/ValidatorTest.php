<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 15.05.2017
 * Time: 21:05
 */
require_once "src/User.php";
require_once "src/Validator.php";
require_once "vendor/autoload.php";
use PHPUnit\Framework\TestCase;
class ValidatorTest extends TestCase
{
    private $validator;
    public function setUp(){
        $user = new User();
        $user->createUser('test@test.ru', 5555);
        $this->validator = new Validator($user);
    }
    public function testValidate(){
        $this->assertTrue($this->validator->userValidate('test@test.ru', 5555));
    }

}