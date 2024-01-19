<?php

// Exercise 2
// Given the string `$text = "Hello, World! How are you doing?"`, perform the following operations:
    $text = "Hello, World! How are you doing?";
//     1. Find the length of the string.
echo strlen($text) . PHP_EOL;
//     2. Convert the entire string to lowercase.
echo strtolower($text) . PHP_EOL;
//     3. Convert the entire string to uppercase.
echo strtoupper($text) . PHP_EOL;
//     4. Replace "How are you doing?" with "Fine, thank you!".
echo str_replace("How are you doing?", "Fine, thank you!", $text) . PHP_EOL;
//     5. Extract and print the first 10 characters of the string.
echo substr($text, 0, 10) . PHP_EOL;
//     6. Extract and print the substring starting from the 8th character to the end.
echo substr($text, 7) . PHP_EOL;