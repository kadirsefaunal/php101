<?php
// if-elseif-else

$num1 = 4;
$num2 = 9;
$num3 = 6;

if ($num1 > $num2) {
    echo sprintf('%d bigger than %d', $num1, $num2);
} else {
    echo sprintf('%d bigger than %d', $num2, $num1);
}

echo '<br>';
echo $num2 > $num3 ? 'num2' : 'num3';

echo '<br>';
if ($num1 > $num2 && $num1 > $num3) {
    echo 'biggest num1';
} else if ($num2 > $num1 && $num2 > $num3) {
    echo 'biggest num2';
} else {
    echo 'biggest num3';
}