<?php 
// Exercise 4
// Given the string `$name = "John"`, perform the following operations:
    $name = "John";
//     1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters.
$left = str_pad($name, 10, "_", STR_PAD_LEFT);
//     2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
$right = str_pad($name, 8, "*", STR_PAD_RIGHT);
//     3. Print the resulting strings.

echo ($left) . PHP_EOL;
echo ($right) . PHP_EOL;