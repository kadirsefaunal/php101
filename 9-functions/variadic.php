<?php

function variadic_func($nonVariadic, ...$variadic) {
    echo $nonVariadic;
    echo '<br>';
    echo json_encode($variadic);
    echo '<br>';
    var_dump($variadic);
}

variadic_func('qwe', 2, 'qwe', 4);