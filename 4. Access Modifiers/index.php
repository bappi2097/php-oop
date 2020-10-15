<?php
class Car
{
    public $name;
    protected $color;
    private $model;

    function __construct($name, $color, $model)
    {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
    }

    public function getName()
    {
        return $this->name;
    }
    protected function getColor()
    {
        return $this->color;
    }
    private function getModel()
    {
        return $this->model;
    }
}

$car = new Car("volvo", "blue", "300v");

// echo "Name : " . $car->name . ", Color: " . $car->color . ", Model: " . $car->model;
echo "Name : " . $car->getName() . ", Color: " . $car->getColor() . ", Model: " . $car->getModel();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifiers</title>
</head>

<body>

</body>

</html>