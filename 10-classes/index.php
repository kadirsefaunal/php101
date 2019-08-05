<?php

class SimpleClass
{
    const TEST = 'constant value';

    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }

    function showConstant() {
        echo  self::TEST . "\n";
    }
}

$myObject = new SimpleClass();
echo $myObject->var;
echo '<br>';
$myObject->displayVar();