<?php
$f = fopen("temp.txt",'w');
$day = 08;
$month = 08;
$year = 2003;
$fprintf($f,"%02-%02-%04",$day,$month,$year);
?>