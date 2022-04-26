<?php

namespace App;

require_once 'Movable.php';

use Movable;

class Hind extends Monster implements Movable
{
    protected string $image = '/hind.svg';
}
