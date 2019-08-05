<?php

interface Shape
{
    public function draw();
}

class Rectangle implements Shape
{
    public function draw() {
        echo 'rectangle';
    }
}

$rectangle = new Rectangle();
$rectangle->draw();