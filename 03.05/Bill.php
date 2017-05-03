<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 03.05.2017
 * Time: 21:06
 */

interface billType{
    public function printBill(Bill $bill, $userId);
}

class Webmoney implements billType{
    public function printBill(Bill $bill, $userId){
        echo 'print Webmoney';
    }
}
class Qiwi implements billType{
    public function printBill(Bill $bill, $userId){
        echo 'print Qiwi';
    }
}
class Bill
{
    private $sum;
    private $num;
    private $key;
    public function __construct($sum, $num, $key)
    {
        $this->sum = $sum;
        $this->num = $num;
        $this->key = $key;
    }
}
class BillPriority{
    private $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function createBill(){
        switch($this->type){
            case 'webmoney':
                $billObj = new Bill(11000, 555, '1234');
                $bill = new Webmoney();
                return $bill->printBill($billObj, '444');
                break;
            case 'qiwi':
                $billObj = new Bill(15000, 888, '8888');
                $bill = new Qiwi();
                return $bill->printBill($billObj, '777');
                break;
        }
    }


}

