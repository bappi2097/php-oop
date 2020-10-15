<?php
abstract class Car
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function getIntro(): string;
}

class Volvo extends Car
{
    public function getIntro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

$volvo = new volvo("volvo");
echo $volvo->getIntro();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Classes</title>
</head>

<body>

</body>

</html>