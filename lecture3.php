<?php
//დავალება 1
$people = [
    "temo" => 23,
    "nika" => 32,
    "giorgi" => 45,
    "lia" => 28,
    "mariami" => 15,
    "tako" => 35,
    "vako" => 55
];

foreach ($people as $name => $age) {
    if ($age >= 30) {
        echo $name . '<br>';
    }
}

echo '<br><br>';

//დავალება 2
function multiplyByTwo(int $num): void
{
    echo ($num * 2) . '<br>';
}

$arr = [
    "12",
    "32",
    "118",
    "15",
    "3",
];

foreach ($arr as $num){
    multiplyByTwo($num);
}

