<?php
include_once "point.php";

class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        $array[] = parent::getX();
        $array[] = parent::getY();
        $array[] = $this->xSpeed;
        $array[] = $this->ySpeed;
        return json_encode($array);
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }

    public function __toString()
    {
        return $this->getSpeed();
    }
}