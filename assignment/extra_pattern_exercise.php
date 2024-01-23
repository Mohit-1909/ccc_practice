<?php
$value = readline("Enter an even/odd number: ");
$invalid = $value<=0? print("Invalid number"):($value%2==0?evenPattern($value):oddPattern($value));


function evenPattern($number){
    $num = $number/2;

    for($i=1; $i<=$num;$i++){
        for($j=1;$j<$i;$j++){
            echo "-";
        }
        for($j=$i; $j<=$num;$j++){
            echo $j;
        }
        for($j=1; $j<=$num-$i+1;$j++){
            echo ($j+$num);
        }
        for($j=1;$j<=$i-1;$j++){
            echo "-";
        }


        echo "\n";
    }
    for($i=$num-1; $i>=1;$i--){
        for($j=1;$j<$i;$j++){
            echo "-";
        }
        for($j=$i; $j<=$num;$j++){
            echo $j;
        }
        for($j=1; $j<=$num-$i+1;$j++){
            echo ($j+$num);
        }
        for($j=1;$j<=$i-1;$j++){
            echo "-";
        }


        echo "\n";
    }
}

function oddPattern($number){
    $num = (1+$number)/2;

    for($i=1; $i<=$num;$i++){
        for($j=1;$j<$i;$j++){
            echo "-";
        }
        for($j=$i; $j<=$num;$j++){
            echo $j;
        }
        for($j=1; $j<=$num-$i;$j++){
            echo ($j+$num);
        }
        for($j=1;$j<=$i-1;$j++){
            echo "-";
        }


        echo "\n";
    }
    for($i=$num-1; $i>=1;$i--){
        for($j=1;$j<$i;$j++){
            echo "-";
        }
        for($j=$i; $j<=$num;$j++){
            echo $j;
        }
        for($j=1; $j<=$num-$i;$j++){
            echo ($j+$num);
        }
        for($j=1;$j<=$i-1;$j++){
            echo "-";
        }


        echo "\n";
    }
}
