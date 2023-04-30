<?php


abstract class A
{
    public $a = "a";
    public function aa()
    {
        return "this is aa";
    }
    abstract function x();
}
class B extends A{
    public function x(){
        return "this is abstract";
    }
}
