<?php
// Exercise 5

// Given the string `$quote = "In three words I can sum up everything I've learned about life: it goes on."`, perform the following operations:
    $quote = "In three words I can sum up everything I've learned about life: it goes on.";
// 1. Count the total number of words in the quote.
echo str_word_count($quote) . PHP_EOL;
// 2. Convert the entire quote to lowercase.
echo strtolower($quote) . PHP_EOL;
// 3. Capitalize the first letter of each word in the quote.
echo ucwords($quote) . PHP_EOL;