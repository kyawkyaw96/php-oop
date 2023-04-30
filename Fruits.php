<?php

class Fruit
{
    public $name;
    public $color;
    public static $a = "abc";

    function detail()
    {
        echo "i am detail \n";
    }
    function __construct($a)
    {
        echo "i am fruit constructor $a \n";
    }
    function __destruct()
    {
        echo "i am fruit destruct \n";
    }
}
class Student
{
    public $name, $genter, $birthYear, $namePrefix, $age;
    function __construct($inpName, $inpGenter, $inpBirthYear)
    {
        $this->name = $inpName;
        $this->genter = $inpGenter;
        $this->birthYear = $inpBirthYear;
        $this->namePrefix = $this->genter === "male" ? "Mr." : "Ms.";
        $this->age = date("Y") - $this->birthYear;
    }
    public function ShwoFullName()
    {
        echo $this->namePrefix . $this->name;
    }
    public function Detail(){
        echo "My name is $this->namePrefix$this->name and i am $this->age year old";
    }
}
