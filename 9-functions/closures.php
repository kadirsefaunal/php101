<?php

$externalVariable = "Hello";
$secondExternalVariable = "Foo";

// $myFunction = function() use ($externalVariable, $secondExternalVariable) {
$myFunction = function() {
    var_dump($externalVariable, $secondExternalVariable); // returns two error notice, since thevariables aren´t defined
};

$myFunction();