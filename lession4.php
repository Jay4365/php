<?php
// write a php programe to find month days
$month = 4;
if ($month <= 12 && $month >= 1) {
    if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
        echo "This month in the 31 days";
    } else if ($month == 2) {
        echo "This month in the 28/29 days";
    } else {
        echo "This month in the 30 days";
    }
} else {
    echo "Invalid input";
}
