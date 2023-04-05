<!-- Write a Php program to calculate final electricity bill based upon below given criteria. take monthly electricity unit from user as input. 
units           price  per unit 
<100            1
>100 & <200     2 
>200 & <300     3
>300 & <400     4
>400            5    -->
<?php
$unit = 455;
if($unit < 100)
{
    echo "Units:- " .$unit;
    echo "<br>";
    echo "Price per units:- " .$price = 1;
}
elseif($unit >= 100 && $unit < 200)
{
    echo "Units:- " .$unit;
    echo "<br>";
    echo "Price per unitd:- " .$price = 2;
}
elseif($unit >= 200 && $unit < 300)
{
    echo "Units:- " .$unit;
    echo "<br>";
    echo "Price per unitd:- " .$price = 3;
}
elseif($unit >= 300 && $unit < 400)
{
    echo "Units:- " .$unit;
    echo "<br>";
    echo "Price per unitd:- " .$price = 4;
}
else 
{
    echo "Units:- " .$unit;
    echo "<br>";
    echo "Price per unitd:- " .$price = 5;
}
echo "<br>";
$amount = $unit * $price ;
echo "Monthly electricity bill:-" .$amount;  
?>