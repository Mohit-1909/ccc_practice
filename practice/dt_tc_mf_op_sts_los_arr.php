<?php
// Data Types :
// 1. Integer
//    - Represents whole numbers without a decimal point.
   	$integerVar = 42 . PHP_EOL;   
// 2. Float 
//    - Represents numbers with a decimal point.
   	$floatVar = 3.14 . PHP_EOL;
// 3. String
//    - Represents a sequence of characters.
$stringVar = "Hello, PHP!" . PHP_EOL;
// 4. Boolean
//    - Represents either `true` or `false`.
   	$boolVar = true . PHP_EOL;
// 5. Array
//    - Represents an ordered map that can hold multiple values.
   	$arrayVar = array(1, 2, 3, "PHP") . PHP_EOL;
// 6. NULL
//    - Represents the absence of a value or a variable without a value.
   	$nullVar = null . PHP_EOL;


// casting to Integer

$input = 10.25; // 10 int(10)
$input = true; // 1 int(1)
$input = false; // 0 int(0)
$input = null; // 0 int(0)
$input = "25%"; // 25 int(25)
$input = "hello"; // 0 int(0)
$input = "hello 123"; // 0 int(0)
$output = (int)$input;
echo $output;
var_dump($output) . PHP_EOL;


// Casting to Float

$input = 10; // 10 float(10)
$input = true; // 1 float(1)
$input = false; // 0 float(0)
$input = null; // 0 float(0)
$input = "25%"; // 25 float(25)
$input = "hello"; // 0 float(0)
$input = "hello 123"; // 0 float(0)
$output = (float)$input;
echo $output;
var_dump($output) . PHP_EOL;


// Casting to String

$input = 150; // 150 string(3)"150"
$input = 10.25; // 10.25 string(5)"10.25"
$input = true; // 1 string(1)"1"
$input = false; // string(0)""
$input = null; // string(0)""
$output = (string)$input;
echo $output;
var_dump($output) . PHP_EOL;


// Casting to Boolean

$input = 10; // 1 bool(true)
$input = 1; // 1 bool(true)
$input = 0; // bool(false)
$input = 125.65; // 1 bool(true)
$input = null; // bool(false)
$input = "25%"; // 1 bool(true)
$input = "hello"; // 1 bool(true)
$input = ""; // bool(false)
$output = (bool)$input;
echo $output;
var_dump($output) . PHP_EOL;


// Casting to Array

$input = 1; // Arrayarray(1)
$input = 0; // Arrayarray(1)
$input = 125.65; // Arrayarray(1)
$input = "25%"; // Arrayarray(1)
$input = "hello"; // Arrayarray(1)
$output = (array)$input;
print_r($output);
var_dump($output) . PHP_EOL;


// Math Functions:
$number = 256.4556;
// 1. Basic Arithmetic
   echo abs($number) . PHP_EOL; 
// Returns the absolute value of a number.
   echo ceil($number) . PHP_EOL;
// Rounds a number up to the nearest integer.
   echo floor($number) . PHP_EOL; 
// Rounds a number down to the nearest integer.
$precision = 2;
   echo round($number, $precision) . PHP_EOL;
// Rounds a number to the nearest integer or specified number of decimal places.

// 2. Power Functions
$base = 2;
$exponent = 3;
   echo pow($base, $exponent) . PHP_EOL;
// Returns the value of a base raised to the power of an exponent.
$number = 49;
   echo sqrt($number) . PHP_EOL;
// Returns the square root of a number.

// 3. Random Number Generation
$min = 52;
$max = 1000;
   echo rand($min, $max) . PHP_EOL; 
// Generates a random integer between the specified minimum and maximum 

// 4. Number Formatting
$number = 10000000000;
$decimals = 2;
$decimal_point= ".";
$thousands_separator= ",";
   echo number_format($number, $decimals, $decimal_point, $thousands_separator) . PHP_EOL;
// Formats a number with grouped thousands and a specified number of decimals.

// PHP Operators :
// 1. Arithmetic Operators:
$a = 6;
$b = 4;
$c = 7;
// 1. Addition:
   echo($a + $b) . PHP_EOL;
// 2. Subtraction:
echo($a - $b) . PHP_EOL;
// 3. Multiplication:
echo($a * $b) . PHP_EOL;
// 4. Division:
echo($a / $b) . PHP_EOL;
// 5. Modulus (Remainder):
echo($a % $b) . PHP_EOL;
// 6. Exponentiation:
echo($a ** $b) . PHP_EOL;

// 2. Assignment Operators:

// 7. Assignment:
echo($a = $b) . PHP_EOL;
// 8. Addition Assignment:
echo($a += $b) . PHP_EOL;
// 9. Subtraction Assignment:
echo($a -= $b) . PHP_EOL;
// 10. Multiplication Assignment:
echo($a *= $b) . PHP_EOL;
// 11. Division Assignment:
echo($a /= $b) . PHP_EOL;
// 12. Modulus Assignment:
echo($a %= $b) . PHP_EOL;


// 3. Comparison Operators:

// 13. Equal:
echo($a == $b) . PHP_EOL;
// 14. Identical:
echo($a === $b) . PHP_EOL;
// 15. Not Equal:
echo($a != $b) . PHP_EOL;
echo($a <> $b) . PHP_EOL;
// 16. Not Identical:
echo($a !== $b) . PHP_EOL;
// 17. Greater Than:
echo($a > $b) . PHP_EOL;
// 18. Less Than:
echo($a < $b) . PHP_EOL;
// 19. Greater Than or Equal To:
echo($a >= $b) . PHP_EOL;
// 20. Less Than or Equal To:
echo($a <= $b) . PHP_EOL;

// 4. Logical Operators:
// 21. Logical AND:
echo($a && $b) . PHP_EOL;
// 22. Logical OR:
echo($a || $b) . PHP_EOL;
// 23. Logical NOT:
echo(!$a) . PHP_EOL;

// 5. Increment and Decrement Operators:

// 24. Increment:
echo(++$a) . PHP_EOL;
echo($a++) . PHP_EOL;
// 25. Decrement:
echo(--$a) . PHP_EOL;
echo($a--) . PHP_EOL;

// 6. String Operators:
// 26. Concatenation:
    echo($a . $b) . PHP_EOL;
// 27. Concatenation Assignment:
    echo($a .= $b) . PHP_EOL;

// 7. Conditional (Ternary) Operator:

// 28. Ternary:
    echo($a ? $b : $c) . PHP_EOL;

// Array Functions :

// 1. Array Creation and Initialization:

// 1. Creating a new array using array() or []
$newArray1 = array("apple", "banana", "cherry");
$newArray2 = ["orange", "grape"];
echo "1. Creating a new array: ";
print_r($newArray1);
print_r($newArray2);

// 2. Merging two arrays using array_merge()
$array1 = ["apple", "banana"];
$array2 = ["orange", "grape"];
$mergedArray = array_merge($array1, $array2);
echo "\n2. Merging two arrays: ";
print_r($mergedArray);

// 3. Creating an array by combining keys and values using array_combine()
$values = ["a", "b", "c"];
$keys = [1, 2, 3];
$combinedArray = array_combine($keys, $values);
echo "\n3. Creating an array by combining keys and values: ";
print_r($combinedArray);

// 4. Creating an array containing a range of elements using range()
$numberRange = range(1, 10, 2);
echo "\n4. Creating an array containing a range of elements: ";
print_r($numberRange);


// 2. Array Modification:

// 5. Adding elements to the end of an array using array_push() or $array[] = $element
$array5 = ["apple", "banana"];
array_push($array5, "cherry");
$array5[] = "orange";
echo "5. Adding elements to the end of an array: ";
print_r($array5);

// 6. Removing the last element from an array using array_pop()
$array6 = ["apple", "banana", "cherry"];
$removedElement6 = array_pop($array6);
echo "\n6. Removing the last element from an array: ";
echo "Modified array: ";
print_r($array6);
echo "Removed element: $removedElement6\n";

// 7. Adding elements to the beginning of an array using array_unshift()
$array7 = ["banana", "cherry"];
array_unshift($array7, "apple");
echo "\n7. Adding elements to the beginning of an array: ";
print_r($array7);

// 8. Removing the first element from an array using array_shift()
$array8 = ["apple", "banana", "cherry"];
$removedElement8 = array_shift($array8);
echo "\n8. Removing the first element from an array: ";
echo "Modified array: ";
print_r($array8);
echo "Removed element: $removedElement8\n";

// 9. Removing a portion of the array and replacing it with something else using array_splice()
$array9 = ["apple", "banana", "cherry", "date"];
$removedElements9 = array_splice($array9, 1, 2, ["orange", "grape"]);
echo "\n9. Removing a portion of the array and replacing it with something else: ";
echo "Modified array: ";
print_r($array9);
echo "Removed elements: ";
print_r($removedElements9);

// 3. Array Access:

// 10. Counting the number of elements in an array using count()
$array10 = ["apple", "banana", "cherry", "orange"];
$elementCount = count($array10);
echo "10. Number of elements in the array: $elementCount\n";

// 11. Counting the number of elements in an array using sizeof() (alias of count())
$array11 = ["apple", "banana", "cherry", "orange"];
$elementCount11 = sizeof($array11);
echo "11. Number of elements in the array (using sizeof()): $elementCount11\n";

// 12. Checking if a key exists in an array using array_key_exists()
$array12 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$keyExists = array_key_exists("b", $array12);
echo "12. Does the key 'b' exist in the array? " . ($keyExists ? "Yes" : "No") . "\n";

// 13. Getting all keys of an array using array_keys()
$array13 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$keysArray13 = array_keys($array13);
echo "13. Keys of the array: ";
print_r($keysArray13);

// 14. Getting all values of an array using array_values()
$array14 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$valuesArray14 = array_values($array14);
echo "14. Values of the array: ";
print_r($valuesArray14);

// 4. Array Search:

// Original array
$arrayToSearch = ["apple", "banana", "cherry", "orange"];
echo "Original array: ";
print_r($arrayToSearch);

// 15. Checking if a value exists in an array using in_array()
$valueToCheck = "cherry";
$valueExists = in_array($valueToCheck, $arrayToSearch);
echo "15. Does the value '$valueToCheck' exist in the array? " . ($valueExists ? "Yes" : "No") . "\n";

// 16. Searching an array for a given value and returning the corresponding key using array_search()
$keyFound = array_search($valueToCheck, $arrayToSearch);
echo "16. Key for value '$valueToCheck' in the array: $keyFound\n";

// 17. Returning an array with elements in reverse order using array_reverse()
$reversedArray = array_reverse($arrayToSearch);
echo "17. Reversed array: ";
print_r($reversedArray);

// 5. Array Sorting:

// Original associative array
$associativeArray = ["b" => "banana", "a" => "apple", "c" => "cherry"];
echo "Original associative array: ";
print_r($associativeArray);

// 18. Sorting an array using sort()
$sortedArray = $associativeArray;
sort($sortedArray);
echo "18. Sorted array: ";
print_r($sortedArray);

// 19. Sorting an array in reverse order using rsort()
$reverseSortedArray = $associativeArray;
rsort($reverseSortedArray);
echo "19. Reverse sorted array: ";
print_r($reverseSortedArray);

// 20. Sorting an associative array by values using asort()
$sortedValuesArray = $associativeArray;
asort($sortedValuesArray);
echo "20. Sorted associative array by values: ";
print_r($sortedValuesArray);

// 21. Sorting an associative array by keys using ksort()
$sortedKeysArray = $associativeArray;
ksort($sortedKeysArray);
echo "21. Sorted associative array by keys: ";
print_r($sortedKeysArray);

// 22. Sorting an associative array in reverse order by values using arsort()
$reverseSortedValuesArray = $associativeArray;
arsort($reverseSortedValuesArray);
echo "22. Reverse sorted associative array by values: ";
print_r($reverseSortedValuesArray);

// 23. Sorting an associative array in reverse order by keys using krsort()
$reverseSortedKeysArray = $associativeArray;
krsort($reverseSortedKeysArray);
echo "23. Reverse sorted associative array by keys: ";
print_r($reverseSortedKeysArray);

// 6. Array Filtering:

// Original array
$numbers = [1, 2, 3, 4, 5];
echo "Original array: ";
print_r($numbers);

// 24. Filtering elements of an array using array_filter()
$filteredArray = array_filter($numbers, function($element) {
    return $element % 2 == 0; // Keep only even numbers
});
echo "24. Filtered array (keeping only even numbers): ";
print_r($filteredArray);

// 25. Applying a callback function to each element of an array using array_map()
$squaredArray = array_map(function($element) {
    return $element ** 2; // Square each element
}, $numbers);
echo "25. Squared array: ";
print_r($squaredArray);

// 26. Iteratively reducing the array to a single value using array_reduce()
$sum = array_reduce($numbers, function($carry, $element) {
    return $carry + $element; // Calculate the sum
}, 0);
echo "26. Sum of the array: $sum\n";

// 7. Array Slicing:

// Original array
$fruits = ["apple", "banana", "cherry", "date", "grape"];
echo "Original array: ";
print_r($fruits);

// 27. Extracting a portion of the array using array_slice()
$slicedArray = array_slice($fruits, 1, 3, true); // Extract from index 1, length 3, preserving keys
echo "27. Sliced array: ";
print_r($slicedArray);

// 28. Removing a portion of the array and replacing it with something else using array_splice()
$replacementArray = ["kiwi", "lemon"];
array_splice($fruits, 2, 2, $replacementArray); // Remove from index 2, length 2, replace with $replacementArray
echo "28. Modified array after array_splice(): ";
print_r($fruits);

// Loops :

// 1. For Loop:
//     The `for` loop is used when you know in advance how many times the loop should run.

// Example: Print numbers from 1 to 5 using a for loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

// 2. While Loop:
//     The `while` loop is used when you don't know in advance how many times the loop should run, and it continues as long as a specified condition is true

// Example: Print numbers from 1 to 5 using a while loop
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}

// 3. Foreach Loop:
//     The `foreach` loop is specifically designed for iterating over arrays.

// Example: Iterate over an array and print each element
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo $color . " ";
}

// Statements :	

//1. if, if...else and nested if statements 

$result = true;
$result = false;
$result = 1;
$result = 0;
$result = "";
$result = "Something";
$result = null;
$result = 10.25;

// if ($result) {
//     echo "Your are in IF block";
// } else {
//     echo "Your are in ELSE block";
// };

$result = 'Red';
// $result = 'Green';
// $result = 'Blue';

// if ($result == 'Red'){
//     echo "Your are in IF block";
// } 
// elseif ($result == 'Green'){
//     echo "Your are in ELSE IF block";
// }
// else {
//     echo "Your are in ELSE block";
// };

$result2 = true;
$result2 = false;

if ($result == 'Red') {
    if ($result2) {
        echo "Your are in NESTED IF block";
    } else {
        echo "Your are in NESTED ELSE block";
    };
} else {
    echo "Your are in ELSE block";
};


// 2.switch Statements

$day = "Monday";
$day = "Sunday";
$day = "Saturday";

switch ($day) {
    case "Monday":
        echo "Monday";
        break;
    case "Saturday":
        echo "Saturday";
        break;
    case "Thursday":
        echo "Thursday";
        break;
    default:
        echo "NOT";
        break;
};
