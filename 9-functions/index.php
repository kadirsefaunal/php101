<?php

function hello($name)
{
    print "Hello $name";
}

hello("Alice");

function add(int $a, int $b): int
{
    return 'qweqwe';
    // return $a + $b;
}

add(3, 5);