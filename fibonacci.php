<?php
function fibonacciSeq($num)
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $num; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo "os primeiros $num números da sequência de Fibonacci são:\n";
    for ($i = 0; $i < $num; $i++) {
        echo $fibonacci[$i];
        if ($i < $num - 1) {
            echo ", ";
        }
    }
    echo "\n";
}
fibonacciSeq(10);
