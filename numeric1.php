<?php
echo "Numeric Array";
$number=array(1,3,5,2,4,10,8,6,9,7,'Maruti','Suzuki','Hyundai','Kia');
sort($number,SORT_NUMERIC);
var_dump($number);

echo "Associative Array<br>";
$family=array("Name"=>"Jay","Age"=>"20","Gender"=>"Male");
echo $family["Name"].'<br>';
echo $family["Age"].'<br>';
echo $family["Gender"].'<br>'.'<br>';

echo"Multidimensional Array";
$families=array("father"=>array("Vimalbhai","Chudasama",true),"mother"=>array("Reenaben","Chudasama",45),"child1"=>array("Jay","j.v.chudasama4365@gmail.com","08-September-2003"));
print_r($families); 
?>