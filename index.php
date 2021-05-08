<?php
include_once "Rectangle.php";

$width = 50;
$height = 20;
$rectangle = new Rectangle($width,$height);

echo $rectangle->width;
echo "<br>";
echo $rectangle->height;

$rectangle->width = 100;
$rectangle->height = 50;
echo "<br>";
echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";
echo $rectangle->getPerimeter();
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo ("Your rectangle: " . $rectangle->display());