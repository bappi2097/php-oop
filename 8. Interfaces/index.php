<?php
interface Animal
{
    public function makeSound();
}

interface Mammal extends Animal
{
    public function takeMilks();
}

class Monkey implements Mammal
{
    public function makeSound()
    {
        return "make Sound";
    }
    public function takeMilks()
    {
        return "Take Milks";
    }
}

$monkey = new Monkey();

echo $monkey->makeSound() . "</br>" . $monkey->takeMilks() . "</br>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>

<body>

</body>

</html>