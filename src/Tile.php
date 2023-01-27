<?php

namespace App;

use App\Mappable;
use Movable;

abstract class Tile implements Mappable
{
    protected int $x;
    protected int $y;
    protected string $image;
    protected bool $crossable = true;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Get the value of x
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Set the value of x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * Get the value of y
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * Set the value of y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * Get the image
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * Set the image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Get the value of crossable
     */
    public function isCrossable(Movable $movable): bool
    {
        return $this->crossable;
    }

    /**
     * Set the value of crossable
     */
    public function setCrossable(bool $crossable): void
    {
        $this->crossable = $crossable;
    }

}