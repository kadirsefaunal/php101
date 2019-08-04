<?php

$fruits = ['apple', 'banana', 'cherry'];

foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

$data = [
    [ "Fruit" => "Apple", "Color" => "Red", "Cost" => 1 ],
    [ "Fruit" => "Banana", "Color" => "Yellow", "Cost" => 7 ],
    [ "Fruit" => "Cherry", "Color" => "Red", "Cost" => 2 ],
    [ "Fruit" => "Grape", "Color" => "Green", "Cost" => 4 ]
];

foreach ($data as $fruit) {
    foreach ($fruit as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
    }

    echo '<br>';
}