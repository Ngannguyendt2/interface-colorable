<?php
include "interface/Colorable.php";
include "class/Circle.php";
include "class/Square.php";
include "class/Rectangle.php";
$circle = new Circle(5);
$square = new Square(5);
$rectangle = new Rectangle(5, 8);
$array = [$circle, $square, $rectangle];
foreach ($array as $value) {
    if ($value instanceof Colorable) {
        echo $square->howToColor() . '<br>';
    } else {
        echo 'Area: ' . $value->getArea() . '<br>';
    }

}
