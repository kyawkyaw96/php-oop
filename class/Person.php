<?php

class Person
{
    //public = any one can know and can take
    //protected = my friend and family can know and take
    //private = no one can know , only me
private $happy="i am happy";
    public function walk()
    {
        return "can walk";
    }
    public function talk()
    {
       return $this->work();
        return "can talk";
    }
    protected function work()
    {
        return "work in yangon";
    }
    protected function age()
    {
        return "my age";
    }
    private function fbPassword()
    {
        return "my facebook password";
    }
    private function bankAcc()
    {
        return "my bank account";
    }
}
