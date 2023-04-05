<?php
$length1 ="60";
$length2 ="140";
$length3 ="150";
$width1 ="80";
$width2 ="90";
$width3 ="100";

$office1 = $width1 * $length1; 
$office2 = $width2 * $length2; 
$office3 = $width3 * $length3;

if($office1 == $office2 && $office2 == $office3) 
{
    echo "all are same";
}
else
{
    if($office1 > $office2)
    {
        if($office1 > $office3)
        {
        echo "office 1 is big";
        }
        else
        {
            echo "office 3 is big";
        }
    }
    else if($office2 > $office3)
    {
        echo "office 2 is big";
    }
    else
    {
        echo "office 3 is big";
    }
}
?>