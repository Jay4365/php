<?php
//1st method
$names=array("Jay","Gautam","Asif");
print_r($names);
var_dump($names);
// 2st method
$cars[0]="Gtr";
$cars[1]="BMW";
$cars[2]="Omni";
var_dump($cars);

//example of associative array
$person = array("Name"=>"Jay","Surname"=>"Chudasama","Age"=>20,"Gender"=> True);
var_dump($person);
echo $person['Name']. "<br>";
echo $names[2];
echo "<br>";

foreach($person as $value)
{
    echo $value."<br>";
}

echo "<br>";
echo "<br>";
foreach($person as $key=>$value)
{
    echo "This is Key" .$key. "This is Value" .$value."<br>";
}
?>