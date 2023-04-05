<?php
echo "Array".'<br>';
$myarray=array(10,20,30,4=>40,5=>50,6=>60,70,80,90,100);
print_r($myarray);
echo "<br>";
echo "Asort Function" . '<br>';
$array=array(1=>"Lemon",2=>"Mango",3=>"Kiwi",4=>"Banana");
asort($array);
foreach($array as $key => $val){
    echo "$key = $val\n".'<br>';
}
?>
