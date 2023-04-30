<?php

interface A
{
    public function a();
}
interface B
{
    public function b();
}
class C implements A, B
{
    public function a()
    {
        return " i am a ";
    }
    public function b()
    {
        return "i am b ";
    }
}
$c=new C;
print_r($c->a().$c->b());