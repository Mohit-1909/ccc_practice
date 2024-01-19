<?php

// Exercise 3
// Given the string `$sentence = "The quick brown fox jumps over the lazy dog"`, perform the following operations:
    $sentence = "The quick brown fox jumps over the lazy dog";
//     1. Find the position of the word "fox" in the sentence.
echo strpos($sentence, "fox") . "\n";
//     2. Check if the word "cat" is present in the sentence.
$cat = strpos($sentence, "cat");
echo ($cat? "yes" : "no") . "\n";
//     3. Extract and print the first 20 characters of the sentence.
echo substr($sentence, 0, 20) . "\n";
