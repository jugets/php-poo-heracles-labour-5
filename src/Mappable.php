<?php

namespace App;

interface Mappable
{
    public function getX();
    public function getY();
    public function getImage();
    public function setImage(string $image): void;
}