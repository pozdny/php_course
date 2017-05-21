<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 15.05.2017
 * Time: 21:24
 */
require_once "src/User.php";
require_once "vendor/autoload.php";
use PHPUnit\Framework\TestCase;
class UserValidTest extends TestCase
{
    private $testUser;
    public function testGetUser(){
        $stub = $this->createMock('User');
        $stub->method('getUser')->willReturn('test@test.ru');
        $this->assertEquals('test@test.ru', $stub->getUser('test@test.ru'));
    }
}