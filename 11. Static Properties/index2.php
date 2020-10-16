<?php

class pi
{
    public static $value = 3.1416;
    public function staticValue()
    {
        return self::$value;
    }
}

echo pi::$value . "</br>";
$pi = new pi();
echo $pi->staticValue();
