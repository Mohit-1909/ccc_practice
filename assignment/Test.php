<?php

$array = [3, 5, 7, 1, 9];
sort($array);
echo  minSum($array) . "\n";
echo  maxSum($array) . "\n";

function minSum($array)
{
    return array_sum(array_slice($array, 0, count($array) - 1));
}

function maxSum($array)
{
    return array_sum(array_slice($array, 1, count($array)));
}
