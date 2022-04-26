<?php

namespace App;

use Movable;

class Bush extends Tile
{
    protected string $image = '../assets/images/bush.png';

    protected bool $crossable = false;

    public function isCrossable(Movable $movable): bool
    {
        if($movable instanceof Hind)
        {
            return true;
        }else{
            return $this->crossable;
        }
    }
}