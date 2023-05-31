<?php
echo 'Exercise 1: <br><br>';

abstract class Cars
{
    abstract function printCarName(): void;
}

class Mercedes extends Cars
{
    function printCarName(): void
    {
        echo 'This car is Mercedes <br>';
    }
}

class BMW extends Cars
{
    function printCarName(): void
    {
        echo 'This car is BMW <br>';
    }
}

$mercedes = new Mercedes();
$bmw = new BMW();

$mercedes->printCarName();
$bmw->printCarName();

echo '<br><br>Exercise 2:<br><br>';

class Foo
{
    static string $name = 'Andro <br>';

    static function intro(): string
    {
        return 'Something <br>';
    }
}

echo Foo::$name;
echo Foo::intro();