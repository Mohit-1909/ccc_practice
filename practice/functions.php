<?php

// $string = 'Mohit Dodeja';
// echo strlen($string);
// Returns the length of a string.

// $subject = "I pursue my degree from Adani College";
// $search = "College";
// $replace = "University";
// echo str_replace($search, $replace, $subject);
// Replaces all occurrences of a substring with another substring in a given string.

// $haystack = "I love playing baskeball, chess and badminton.";
// $needle = "chess";
// echo strpos($haystack, $needle);
// Finds the position of the first occurrence of a substring in a string.

// $haystack = "I love playing baskeball, chess and badminton.";
// $needle = "CHESS";
// echo strripos($haystack, $needle);
// strripos in case-insensitive unlike strrpos

// $string = "I love playing baskeball, chess and badminton.";
// $start = 2;
// $length = 4;
// echo substr($string, $start, $length);
// Returns a part of a string starting from the specified position and with a specified length.

// $string = "HELLO HOW ARE YOU?";
// echo strtolower($string);
// Converts a string to lowercase.

// $string = "hello my name is mohit?";
// echo strtoupper($string);
// Converts a string to uppercase.

// $string = "  I love playing baskeball, chess and badminton.  ";
// echo trim($string);
// Removes whitespace or other predefined characters from the beginning and end of a string.

// $glue = ['H', 'E'];
// echo implode($glue);
// Joins array elements with a string.

// $string = "I love playing baskeball, chess and badminton.";
// $delimiter = " ";
// $NoofDivisions = 2;
// print_r (explode($delimiter, $string, $NoofDivisions));
// Splits a string into an array by a specified delimiter.

// $string = "I <b>love</b> playing baskeball, chess and badminton.";
// echo htmlspecialchars($string);
// Converts special characters to HTML entities.

// echo htmlentities($string);
// Converts all applicable characters to HTML entities.

// echo nl2br($string);
// Inserts HTML line breaks before all newlines in a string.

// $string = "I love playing baskeball, chess and badminton.";
// $multiplier = 2;
// echo str_repeat($string, $multiplier);
// Repeats a string a specified number of times.

// $string = "I love playing baskeball, chess and badminton.";
// echo strrev($string);
// Reverses a string.

// $string = "I love playing baskeball, chess and badminton.";
// echo str_shuffle($string);
// Randomly shuffles all characters in a string.

// $string = "I love playing baskeball, chess and badminton.";
// $length = 12;
// print_r(str_split($string, $length));
// Converts a string to an array, breaking it into smaller chunks.

// $string = "I love playing baskeball, chess and badminton.";
// echo str_word_count($string);
// Returns the number of words in a string.

// $string = "I love playing baskeball, chess and badminton.";
// $replacement = "chekers";
// $start = 26;
// $length = 5;
// echo substr_replace($string, $replacement, $start, $length);
// Replaces a portion of a string with another string.

// str_pad($string, $length, $pad_string, $pad_type):
// Pads a string to a certain length with another string.

// $string1 = "Hello";
// $string2 = "Helloooooooo";
// echo strcmp($string1, $string2);
// Compares two strings.

// echo strcoll($string1, $string2);
// Locale based string comparison.

// $string = "I love playing baskeball, chess and badminton.";
// $mask = 'b';
// $start = 0;
// $length = 8;
// echo strcspn($string, $mask, $start, $length);
// Finds the length of the initial segment not matching a mask.

// $haystack = "I love playing baskeball, chess and badminton.";
// $needle = "chess";
// $before_needle = "I";
// echo stristr($haystack, $needle, $before_needle);
// Case-insensitive search for the first occurrence of a string.

// $string = "I love playing baskeball, chess and badminton.";
// $char_list = 'p';
// echo strpbrk($string, $char_list);
// Searches a string for any of a set of characters.

// $haystack = "I love playing baskeball, chess and badminton.";
// $needle = "chess";
// $before_needle = "I";
// echo strstr($haystack, $needle, $before_needle);
// Finds the first occurrence of a string.

// $string = " I love to play baseball";
// $from = 'b';
// $to =   'k';
// echo strtr($string, $from, $to);
// Translates characters or replaces substrings.

// $string = "i love playing baskeball, chess and badminton.";
// echo ucfirst($string);
// Converts the first character of a string to uppercase.

// echo ucwords($string);
// Converts the first character of each word in a string to uppercase.
