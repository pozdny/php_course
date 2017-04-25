<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 25.04.2017
 * Time: 23:19
 */
trait Foo
{
    public function str($s)
    {
        return strtoupper($s);
    }
    public function num($n)
    {
        return $n;
    }
}
trait Foo1
{
    public function str($s)
    {
        return strtoupper($s);
    }
    public function num($n)
    {
        return $n;
    }
}
class Object
{
    use Foo, Foo1{
        Foo::str insteadof Foo1; // метод str использовать из Foo
        Foo1::num insteadof Foo; // метод num использовать из Foo1
    }


}