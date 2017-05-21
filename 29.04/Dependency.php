<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 29.04.2017
 * Time: 15:28
 */
class User
{
    private $id;
    private $name;
    private $company;
    public function __construct($userId, $userName, $userCompany)
    {
        $this->id = $userId;
        $this->name = $userName;
        $this->company = $userCompany;
    }
}
class Bill{
    private $_billId;
    private $_summ;
    private $_user;

    public function __construct($billId, $summ, User $userObj)
    {
        $this->_billId = $billId;
        $this->_summ = $summ;
        //$this->_user = new User($userId, $userName);
        $this->_user = $userObj;
    }
    public function getSumm(){
        echo $this->_summ;

    }
    public function getUser(){
        var_dump($this->_user);
    }
    public function printBill(){
        echo 'Your bill';
    }

}
$user = new User(1, 'Vasya', 'NSK');
var_dump($user);
$bill = new Bill(777, 1000, $user);
echo '<br>';
var_dump($bill);