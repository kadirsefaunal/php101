<?php

class SimpleClass {
    function __construct() {
        print "In constructor\n";
    }
}

$myObject = new SimpleClass();

class SimpleClass2 {
    function __destruct() {
        print "In destruct\n";
    }
}

$myObject2 = new SimpleClass2();