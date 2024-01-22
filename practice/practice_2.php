<?php 

echo "<--data types--><br>";
    $int=12;
    echo "int:";
    var_dump($int);

    $float=12.3;
    echo "<br>float:";
    var_dump($float);

    $string="hello";
    echo "<br>string:";
    var_dump($string);

    $boolean=true;
    echo "<br>boolean:";
    var_dump($boolean);

    $array=array(1,2,3,"hi");
    echo "<br>array:";
    var_dump($array);
    echo "<br>print with position:";
    var_dump($array[2]);
    echo "<br>update:";
    $array[1]=12.2;
    var_dump($array);
    echo "<br>push:";
    array_push($array,true);
    var_dump($array);
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    echo "<br>key value array:";
    var_dump($car);
    echo "<br>get value with key:";
    var_dump($car["model"]);
    $car["year"] = 2024;
    echo "<br>update with key";
    var_dump($car);
    unset($car["year"]);
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
    echo "<br>multidimention:".$cars[0][2];

    $null=null;
    echo "<br>null:";
    var_dump($null);
    

    echo "<br><br><--type casting-->";
    
    $float=12.3;
    echo "<br>float:";
    var_dump($float);
    $int=(int)$float;
    echo "<br>float to int:";
    var_dump($int);
    $string=(string)$int;
    echo "<br>int to string:";
    var_dump($string);
    $string=1;
    $bool=(boolean)$string;
    echo "<br>string to boolean:";
    var_dump($bool);
    $array=(array)$float;
    echo "<br>float to array:";
    var_dump($array);
    $a=1;
    //$unset=(unset) $a;
    //echo "int to unset:".var_dump($unset)."<br><br>";

    

    echo "<br><br><--math function--><br>";
    
    echo "<--1.basic arithmetic--><br>";
    $num=-12.6;
    echo "abs:".abs($num)."<br>";
    echo "ceil:".ceil($num)."<br>";
    echo "floor:".floor($num)."<br>";
    echo "round:".round($num)."<br><br>";

    echo "<--2.power function--><br>";
    echo "pow:".pow($num,2)."<br>";
    $a=64;
    echo "sqrt:".sqrt($a)."<br><br>";
    
    echo "<--3.random num--><br>";
    echo "random:".rand(0,200)."<br><br>";

    echo "<--4.num formatting--><br>";
    echo "number formatting:".number_format("1000",5,"$","@")."<br><br>";
  

    echo "<--php operators--><br>";
    
    $a=10;
    $b=5;
    

    echo "<--1.arithmetic--><br>";
    echo "add:".$a+$b."<br>";
    echo "sub:".$a-$b."<br>";
    echo "mul:".$a*$b."<br>";
    echo "sub:".$a/$b."<br>";
    echo "modulus:".$a%$b."<br>";
    echo "expo:".$a**$b."<br><br>";
    

    echo "<--2.assignment--><br>";
    $a=10;
    $b=5;
    echo "assignment:".$a=$b."<br>";
    $a=10;
    $b=5;
    echo "add assignment:";
    var_dump($a += $b);
    $a=10;
    $b=5;
    echo "<br>sub assignment:";
    var_dump($a -= $b);
    
    $a=10;
    $b=5;
    echo "<br>mul assignment:";
    var_dump($a *= $b);
    $a=10;
    $b=5;
    echo "<br>div assignment:";
    var_dump($a /= $b);
    $a=10;
    $b=5;
    echo "<br>modulus assignment:";
    var_dump($a %= $b);
    
    

    echo "<br><br><--3.comparison-->";
    echo "<br>equal:";
    var_dump($a==$b);
    echo "<br>identical:";
    var_dump($a===$b);
    echo "<br>not equal:";
    var_dump($a!=$b);
    echo "<br>not identical:";
    var_dump($a!==$b);
    echo "<br>greater:";
    var_dump($a>$b);
    echo "<br>less than:";
    var_dump($a<$b);
    echo "<br>greater or equal:";
    var_dump($a>=$b);
    echo "<br>less or equal:";
    var_dump($a<=$b);
    

    echo "<br><br><--4.logical-->";
    $a=true;
    $b=false;
    echo "<br>and:";
    var_dump($a&&$b);
    echo "<br>or:";
    var_dump($a||$b);
    echo "<br>not:";var_dump(!$a);


    echo "<br><br><--5.increment decrement-->";
    $a=5;
    echo "<br>increment:".++$a." ".$a++;
    $a=5;
    echo "<br>decrement:".--$a." ".$a--;
    
    echo "<br><br><--6.String Operators-->";
    $a=" hi";
    $b=" hello";
    echo "<br>concate:1)".$a.$b;
    echo "  2)".$b.=$a;

    echo "<br><br><--7.conditional-->";
    $a=10;
    
    echo "<br>ternary:";
    var_dump($a > 9 ?true:false);

    
    echo "<br><br><--statement-->";
    echo "<br><--1.if statement-->";
    $a=10;
    if($a>9){
      echo "true";
    }

    echo "<br><br><--2.if-else statement-->";
    $a=10;
    if($a<9){
      echo "true";
    }
    else{
      echo "false";
    }

    echo "<br><br><--3.if-elseif-else statement-->";
    $a=10;

    if($a<9){
      echo "less";
    }
    elseif($a>9){
      echo "greater";
    }
    else{
      echo "equal";
    }

    echo "<br><br><--4.nested if statement-->";
    $a=10;

    if($a>9){
      if($a>20){
        echo "num is greater than 20";
      }
      else{
        echo "num is gretaer than 9 but less than 20";
      }
    }
    else{
      echo "num is less than 9";
    }

    echo "<br><br><--switch case-->";
    $a=3;

    switch($a){
      case 1:echo "friday";
      break;

      case 2:echo "saturday";
      break;

      case 3:echo "sunday";
      break;

      default:echo "monday";
    }

    echo "<br><br><--loops-->";
    echo "<br><--1.for loop-->";

    for($i=1;$i<=5;$i++){
      echo $i." ";
    }
    echo "<br><br><--2.while loop-->";
    $i=1;
    while($i<6){
      echo $i." ";
      $i++;
    }

    echo "<br><br><--3.do-while loop-->";
    $i=1;
    do{
      echo $i." ";
      $i++;
    }while($i<6);

    echo "<br><br><--4.foreach loop-->";
    $color=array("red","blue","green");
    foreach($color as $c){
      echo $c." ";
    }
    

    echo "<br><br><--Array function-->";
    echo "<br><--1.creation and initialization-->";
    $a=array(1,23.4,"hi",true);
    echo "<br>array:";
    print_r($a);
    $b=array(5,8);
    echo "<br>merge two array:";
    print_r(array_merge($a,$b));
    $key=array("brand","price");
    $value=array("toyota",12000);
    echo "<br>array combine key & value:";
    print_r(array_combine($key,$value));
    echo "<br> range:";
    print_r(range(1,10,3));

    echo "<br><br><--2.array modifiaction-->";
    $a=array(1,2,3);
    echo "<br>push:";
    array_push($a,6);
    print_r($a);
    echo "<br>pop:";
    array_pop($a);
    print_r($a);
    echo "<br>unshift:";
    array_unshift($a,23,67);
    print_r($a);
    echo "<br>shift:";
    array_shift($a);
    print_r($a);
    echo "<br>slice:";
    array_splice($a,1,2,56);
    print_r($a);

    echo "<br><br><--3.array access-->";
    $a=array(1,2,3,4,5);
    echo"<br>count:".count($a);
    echo "<br>size:".sizeof($a);
    $ab=array('no'=>1,'name'=>"hi");
    echo "<br>find key is there or not:";
    var_dump(array_key_exists("name",$ab));
    echo "<br>keys:";
    print_r(array_keys($ab));
    echo "<br>values:";
    print_r(array_values($ab));

    
    echo "<br><br><--4.array search-->";
    $a=array(1,2,3,4,5);
    echo "<br>check value exist:";
    var_dump(in_array(2,$a));
    $ab=array('no'=>1,'name'=>"hi");
    echo "<br>check value and give key:";
    print_r(array_search("hi",$ab));
    echo "<br>reverse:";
    print_r(array_reverse($ab));
    
    echo "<br><br><--5.array sorting-->";
    $a=array(1,4,2,8,5);
    $ab=array("no"=>1,"name"=>"asd","marks"=>86);
    echo "<br>sort:";
    sort($a);
    $arrlength = count($a);
    for($x = 0; $x < $arrlength; $x++) {
      echo $a[$x]." ";
    }
    echo "<br>reverse sort:";
    rsort($a);
    $arrlength = count($a);
    for($x = 0; $x < $arrlength; $x++) {
      echo $a[$x]." ";
    }
    echo "<br>associative sort by values:";
    asort($ab);
    foreach($ab as $x => $x_value) {
      echo "(Key=" . $x . ", Value=" . $x_value.") ";
    }
    echo "<br>associative sort by key:";
    ksort($ab);
    foreach($ab as $x => $x_value) {
      echo "(Key=" . $x . ", Value=" . $x_value.") ";
    }
    echo "<br>associative sort in reverse by values:";
    arsort($ab);
    foreach($ab as $x => $x_value) {
      echo "(Key=" . $x . ", Value=" . $x_value.") ";
    }
    echo "<br>associative sort in reverse by key:";
    krsort($ab);
    foreach($ab as $x => $x_value) {
      echo "(Key=" . $x . ", Value=" . $x_value.") ";
    }
    

    echo "<br><br><--6.filtering-->";
    echo "<br>filter:";
    function even($a)
    {
      if($a%2==0){
        return true;
      }
    }

    $a=array(1,3,2,3,4);
    print_r(array_filter($a,"even"));

    echo "<br>map:";
    function fun($a,$b) 
    { 
      if ($a == $b) 
        return "true";      
      else 
        return "false";   
    }
    $a=array(1,2,3,4);
    $b=array(2,2,5,4);
    print_r(array_map("fun",$a,$b)); 

    echo "<br>reduce:1)";
    function sum($a, $item)
    {
      $a += $item;
      return $a;
    }
    $a = array(1, 2, 3, 4, 5);
    var_dump(array_reduce($a, "sum"));
    echo "<br>  2)";
    var_dump(array_reduce($a, "sum", 10));
    

    echo "<br><br><--7.slicing-->";
    echo "<br>slice:";
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,2,2,true));
    echo "<br>splice:";
    array_splice($a,1,2,"12");
    print_r($a);
?>