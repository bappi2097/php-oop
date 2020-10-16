<?php
class greeting
{
    public static function welcome()
    {
        echo "This is welcome message";
    }
    public function __construct()
    {
        self::welcome();
    }
}

new greeting();
