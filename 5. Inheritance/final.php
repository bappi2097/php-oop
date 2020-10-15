<?php
final class Car
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    final public function intro()
    {
        echo "The car is {$this->name} and the color is {$this->color}.";
    }
}
class Volvo extends Car
{
    public $model;

    function __construct($name, $color, $model)
    {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
    }
    public function intro()
    {
        echo "The car is {$this->name}, the color is {$this->color} and the color is {$this->model}..";
    }
}
$volvo = new Volvo("volvo", "blue", "300v");
$volvo->intro();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>

</body>

</html>