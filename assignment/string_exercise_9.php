<!-- Write a PHP function to generate the Fibonacci sequence up to a specified number of terms. -->
<?php
function generateFibonacci($noOfTerms) {
    $firstTerm = 0;
    $secondTerm = 1;

    for ($i = 0; $i < $noOfTerms; $i++) {
        echo $firstTerm . "\n";

        $temp = $firstTerm + $secondTerm;
        $firstTerm = $secondTerm;
        $secondTerm = $temp;
    }
}

$noOfTerms = readline("Enter the number of terms till the sequence be printed: ");
generateFibonacci($noOfTerms);
?>
