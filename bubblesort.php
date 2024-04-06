<?php

function bubbleSort($ordem) {
    $n = count($ordem);
    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($ordem[$j] > $ordem[$j + 1]) {
                $temp = $ordem[$j];
                $ordem[$j] = $ordem[$j + 1];
                $ordem[$j + 1] = $temp;
                $swapped = true;
            }
        }
        if (!$swapped) {
            break;
        }
    }
    return $ordem;
}

echo "escreva uma sequência de números que deseja ordenar (use espaço entre eles)\n";
$input = readline();
$nums = array_map('intval', explode(' ', $input));

$numerosMistos = bubbleSort($nums);

echo "sequência ordenada: " . implode(", ", $numerosMistos) . "\n";
