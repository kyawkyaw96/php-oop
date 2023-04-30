<?php

// class A
// {
//     public $a = "a";
// }
// class B extends A
// {
//     public $b = "b";
// }
// class C extends B{
//     public $c="c";
// }
// $c = new C;
// var_dump($c);


class Animal
{
    public $gender = "male";

    //parent can be overwrite
    public $life = 100;
    public $name;
    // parent methot/function can be overwrite
    public function Walk()
    {
        return " anmials walk with 4 legs";
    }
}
class Bird extends Animal
{
    public $life = 5;
    public function fly($name)
    {
        return $name . " " . __CLASS__ . " can fly \n";
    }
    public function Walk()
    {
        //parent methot Walk overwrite
        print(parent::Walk());
        echo "\n";
        return " birds walk with 2legs";
        echo "\n";
    }
}
class Mammal extends Animal
{
    public function Feeding($name)
    {
        return $name . " " . __CLASS__ . " feed milk";
    }
    public function Walk()
    {
        //parent methot Walk overwrite
        print(parent::Walk());
        echo "\n";
        return " cow walk with 4 legs";
        echo "\n";
    }
}
$bird = new Bird;
print_r($bird->Walk("eagle"));
$mammal = new Mammal;
print_r($mammal->Walk("cow"));
