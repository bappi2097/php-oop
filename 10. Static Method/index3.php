<?php
class Domain
{
    protected static function welcome()
    {
        echo "this is welcome message";
    }
}

class DomainW3 extends Domain
{
    public function __construct()
    {
        parent::welcome();
    }
}

new DomainW3();
