<?php

trait msg1
{
    public function msg1()
    {
        echo "OOP reduces code duplication!";
    }
}

trait msg2
{
    public function msg2()
    {
        echo "These's th msg 2";
    }
}

class Welcome
{
    use msg1;
}

class Welcome2
{
    use msg1, msg2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";


$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();


?>