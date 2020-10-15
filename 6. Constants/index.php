<?php

class Car
{
    const MESSAGE = "This is a const MESSAGE";

    function __construct()
    {
        echo self::MESSAGE . "</br>";
    }
}

$car = new Car();

echo Car::MESSAGE . "</br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>

</body>

</html>