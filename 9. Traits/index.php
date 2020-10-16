<?php
trait Message
{
    public function getMessage()
    {
        return "This is a test message";
    }
}
class MyClass
{
    use Message;
}

$class = new MyClass();

echo $class->getMessage();
