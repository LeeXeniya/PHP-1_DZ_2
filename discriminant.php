<?php

function discrim($a, $b, $c) {
    return ($b ** 2 - 4 * $a * $c);
}

assert( 0 == discrim(16,-8,1));
assert( 81 == discrim(2,5,-7));

$a = 16;
$b = -8;
$c = 1;
$D = discrim($a, $b, $c);


//echo 'Дискриминант равен: ' . $D;

if($D < 0){
    echo 'Корней нет';
} elseIf(0 == $D) {
    echo 'Корень равен ' . $x = - $b / (2 * $a);
} else {
    $x1 = (- $b - sqrt($D)) / (2 * $a);
    $x2 = (- $b + sqrt($D)) / (2 * $a);
    echo 'Корни: ' . $x1 . ' и ' . $x2;
}
