<?php
echo "<title>Switch Statement</title>";

$days="Feb";
switch ($days){
    case "Sep":
    case "April":
    case "Jun":
    case "Nov":
    echo "Months which have 30days";
break;
case "Jan":
case "Mar":
case "May":
case "July":
case "Aug":
case "Oct":
case "Dec":
echo "Months which have 31days";
break;
case "Feb":
echo "28-day Month";
break;
default:
echo "In leap year, Feb has 29days";
}