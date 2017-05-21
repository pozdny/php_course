<?php

require_once "../vendor/autoload.php";
require_once "Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    private $calc;
    public function testSumm(){
        $this->calc = new Calculator();
        $result = $this->calc->summ(2,3);
        $this->assertEquals(5, $result);
    }
    public function testMinus(){
        $this->calc = new Calculator();
        $result = $this->calc->minus(5,3);
        $this->assertEquals(2, $result);
    }
}