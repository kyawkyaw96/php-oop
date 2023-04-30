<?php
trait A
{
    public $a = "a";
    public function aa()
    {
        return "this is aa";
    }
}
trait B
{
    public $b = "b";
    public function bb()
    {
        return "this is bb";
    }
}
trait C
{
    public $c = "c";
    public function cc()
    {
        return "this is cc";
    }
}
class AA{
    use A,B,C;
}
$aaa=new AA;
print_r($aaa);
echo "\n";
print_r($aaa->aa());
echo "\n";
print_r($aaa->bb());
echo "\n";
print_r($aaa->cc());

