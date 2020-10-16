<?php

class pi
{
    public static $value = 3.1416;
}

class x extends pi
{
    public function staticValue()
    {
        return parent::$value;
    }
}

echo pi::$value . "</br>";
$x = new x();
echo $x->staticValue();
