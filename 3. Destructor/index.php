<?php
class Car
{
    private $name;
    private $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        echo "constructor </br>";
    }

    function __destruct()
    {
        echo "destructor </br>";
        echo "Car: Name: " . $this->name . " Color: " . $this->color . "</br>";
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destructor</title>
</head>

<body>

</body>

</html>