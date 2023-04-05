<?php
//si=p*r*t/100
echo "<h1>Hello</h1>"; 
var_dump($_POST);
extract($_POST);
echo "p(principal)=" .$_POST['pname'];
echo "<br>";
echo "r(rate of interest)=" .$_POST['rname'];
echo "<br>";
echo "t(time)=" .$_POST['tname'];
echo "<br>";
$si = $pname*$rname*$tname / 100;
echo "simple interest =".$si;
?>