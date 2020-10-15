<?php
class Car
{
    private $name;
    private $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }
}

$car1 = new Car("volvo", "black");
echo "Car-1: Name: " . $car1->getName() . " Color: " . $car1->getColor() . "</br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>

<body>

</body>

</html>