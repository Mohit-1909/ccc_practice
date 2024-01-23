<!-- Write a PHP function to calculate the factorial of a given number. -->
<?php
function factorial($num) {
    if ($num < 0) return "Error! Factorial does not exist for negative numbers.";   //Factorial does not exist for negative numbers
    else if ($num == 0) return 1;     //Factorial of zero is defined as 1
    else {
        $factorial = 1;
        while ($num > 1) $factorial *= $num--;
        return $factorial;
        }
    }
    // Calling the above function with different numbers and printing the results
    $val = readline("Enter the number for the factorial: ");
    
    echo "The factorial of" . $val . " is: ".factorial($val). "\n";
?>
