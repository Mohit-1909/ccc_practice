<?php
//If $a is 10% higher than $b then $b is how much lower than $a
$hp=50;
$b=100;
$a=$b+($hp/100)*100;
echo "->if \$b value is 100 so value of \$a:".$a."<br><br>";

$lp= (($a - $b)/$a)*100;

echo "->\$b is around <b>".round($lp,2)."%</b> lower than \$a";
?>