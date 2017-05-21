<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 15.05.2017
 * Time: 20:34
 */
require_once "src/User.php";
require_once "vendor/autoload.php";
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $testUser;
    public function setUp() {
        $this->testUser = new User();
    }

    public function testGetUser() {
        $this->testUser->createUser('test@test.ru', 67844888);
        $currentUser = $this->testUser->getUser('test@test.ru');
        $this->assertEquals('test@test.ru', $currentUser['email']);
    }

    public function testCreateUser() {
        $currentUser = $this->testUser->createUser('test@test.ru', 123);
        $this->assertTrue($currentUser);
    }
}