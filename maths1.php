<?php
// ABS()
var_dump(abs(4.88));
var_dump(abs(88));
var_dump(abs(-88));

// CEIL(),FLOOR(),ROUND()
$amount = 123.456789;
echo "<br/> Original amount :- $amount";
echo "<br/> Ceil of Amount :-" .ceil($amount);  
echo "<br/> Floor of Amount :- " .floor($amount);
echo "<br/> Round of Amount :- " .round($amount);

// POW()
echo "<br/> Power of 2 ^ 8 :- " .pow(2,8);

// RAND()
$num1 = rand(5,15);
$num2 = rand(6,20);
$num3 = rand(7,25);
echo "<br/> num1=$num1, num2=$num2, num3=$num3";

// MIN(),MAX()
echo "<br/>";
$number = array(12,34,7,4,666,4,5,333,5,2);
print_r($number);
echo "<br/>Minimum from number :- " .min($number);
echo "<br/>Maximum from number :- " .max($number);

// PRINTF()
$amount = 123456;
printf("%s",$amount);
echo"<pre>";
printf("<br/> %s",$amount);
printf("<br/> %10s",$amount);
printf("<br/> %-10s",$amount);
printf("<br/> %010s",$amount);
printf("<br/> %'#10s",$amount);

// JOIN()
$cars = array("Maruti","Mahindra","Tata","Hyundai","Rolls-Royce");
$carsname = join(" ",$cars);
print "<br/> $carsname";
?>