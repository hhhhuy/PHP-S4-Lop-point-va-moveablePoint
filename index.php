<?php
include_once "point.php";
include_once "moveablePoint.php";
$point = new Point();
$point->setXY(7, 4);
echo "Point is: " . $point->getXY() . "<br/>";
$moveable = new MovablePoint();
$moveable->setX(6);
$moveable->setY(2);
$moveable->setXSpeed(5);
$moveable->setYSpeed(3);
echo "Start point: " . $moveable . "<br/>";
$moveable->move();
echo "move 1: " . $moveable . "<br/>";
$moveable->move();
echo "move 2: " . $moveable . "<br/>";