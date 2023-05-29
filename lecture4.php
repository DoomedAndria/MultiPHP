<?php

class Fruit
{
    protected string $color;
    protected float $weight;

    public function __construct(string $color, float $weight)
    {
        $this->color = $color;
        $this->weight = $weight; //in kgs
    }
}

class Mango extends Fruit
{

    function getColorAndWeight(): array
    {
        return [$this->color, $this->weight];
    }
}

$mango1 = new Mango("orange", 0.45);
var_dump($mango1);


class Car
{
    private string $color;

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

$car1 = new Car();
$car1->setColor("yellow");
echo '<br>'.$car1->getColor();