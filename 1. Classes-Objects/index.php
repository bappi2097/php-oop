<?php

class Car
{
    public $name;
    public $color;

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }
    function setColor($color)
    {
        $this->color = $color;
    }
}

$car1 = new Car();
$car2 = new Car();
// var_dump($car1 instanceof Car);
$car1->setName("volvo");
$car1->setColor("black");
$car2->name = "audi";
$car2->color = "blue";

echo "Car-1: Name: " . $car1->getName() . " Color: " . $car1->getColor() . "</br>";
echo "Car-2: Name: " . $car2->getName() . " Color: " . $car2->getColor() . "</br>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes/Objects</title>
</head>

<body>

</body>

</html>