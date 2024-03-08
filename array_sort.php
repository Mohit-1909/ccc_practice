<?php

$array = [-10, -5, -7, -1, -9];

// echo arraySort($array);

echo tables();

function minSum($array)
{
    return array_sum(array_slice($array, 0, count($array) - 1));
}

function arraySort($array)
{
    $i = null;
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($min == $array[$i] && $min > $array[$i])
            continue;
        else {
            $temp = $min;
            $min = $array[$i];
            $array[$i] = $temp;
        }
    }
    return $min;
}

function tables()
{
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i*$j = " . ($i * $j) . " ";
        }
        echo "" . PHP_EOL;
    }
}