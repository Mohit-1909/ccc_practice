<?php

function factorsNumber($number)
{
    for ($i = 1; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            echo "$i and " . ($number / $i) . PHP_EOL;
        }
    }
}

$num = readline("Enter a number: ");
factorsNumber($num);
