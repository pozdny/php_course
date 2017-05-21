<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 26.04.2017
 * Time: 19:17
 */
namespace phpcourse;
use app\basic;
require_once 'class.php';
require_once 'globalclass.php';
class Test{
    public function __construct()
    {
        echo __NAMESPACE__;
    }
}
$test = new Test();
echo '<hr>';
$testfromClass = new basic\TestBasic();
echo '<hr>';
$global = new \User();
