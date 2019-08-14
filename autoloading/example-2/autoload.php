<?php

spl_autoload_register(function($className) {
    echo $className;
    echo "\n";
    $file = __DIR__ . '\\' . $className . '.php';
    echo $file;
    echo "\n";
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    echo $file;
    echo "\n";

    if (file_exists($file)) {
        include $file;
    }
});