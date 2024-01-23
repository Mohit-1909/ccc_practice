<!-- Implement the Bubble Sort algorithm to sort an array. (Do not use array sort function)
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90]; -->
<?php
function bubbleSort($arr){
    $n = count($arr);
    for ($i=0; $i<$n-1; $i++){
        for ($j=$i+1; $j<$n; $j++){
            if ($arr[$i] > $arr[$j]){
                // Swap arr[i] and arr[j]
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
                }
            }
        }
        return $arr;
}
$arrayToSort = [64, 34, 25, 12, 22, 11, 90];
echo "Original Array: ";
print_r($arrayToSort);
echo "\n";
$sortedArray = bubbleSort($arrayToSort);
echo "Sorted Array: \n";
print_r($sortedArray);
?>                
