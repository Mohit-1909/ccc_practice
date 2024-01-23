<!-- Write a PHP function to determine whether a given number is prime -->
<?php
function isPrime($num) {
    if ($num <= 1) {
        return "Not Prime";
    }

    $sqrtNum = sqrt($num);
    for ($i = 2; $i <= $sqrtNum; $i++) {
        if ($num % $i == 0) {
            return "Not Prime";
        }
    }

    return "Prime";
}

$num = readline("Enter the number to check if it is prime or not: ");
$flag_val = isPrime($num);

echo $flag_val . PHP_EOL;

