<?php
$x = [
    20,
    "Andria",
    true,
    ["hello", 3.5]
];
var_dump($x[3][1]);

$x = 15;
$y = 13;

echo "<br><br>";

echo ($x + $y) . "<br>";
echo ($x - $y) . "<br>";
echo ($x * $y) . "<br>";
echo ($x / $y) . "<br>";
echo ($x % $y) . "<br>";
echo ($x ** $y) . "<br>";

echo "<br>";

echo ($x = $y) . "<br>";
echo ($x += $y) . "<br>";
echo ($y -= $x) . "<br>";
echo ($x *= $y) . "<br>";
echo ($y /= $x) . "<br>";
echo ($y %= $x) . "<br>";

echo "<br>";

echo (int)($x == $y) . "<br>";
$x = $y;
echo (int)($x === $y) . "<br>";
echo (int)($x !== $y) . "<br>";
echo (int)($x != $y) . "<br>";
echo (int)($x >= $y) . "<br>";
echo (int)($x <= $y) . "<br>";
$x -= $y;
echo (int)($x < $y) . "<br>";
echo (int)($x > $y) . "<br>";




