<?php

use App\Mappable;

interface Movable extends Mappable
{
    public function setX(int $x):void;
    public function setY(int $y):void;
}