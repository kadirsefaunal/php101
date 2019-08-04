<?php

$i = 1;
$sum = 0;

while ($i <= 10) {
    if ($i % 2 == 0) {
        $sum += $i;
    }

    $i++;
}

echo $sum;