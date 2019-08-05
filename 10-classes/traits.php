<?php

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

class MyHelloWorld {
    use Hello;

    public function anotherFunction() {
        echo '!';
    }
}

$myInstence = new MyHelloWorld();
$myInstence->sayHello();
echo '<br>';
$myInstence->anotherFunction();