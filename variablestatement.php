<?php
$val="Aye Moth";
echo "{$val}"."<br/>";
$b='Moth\'s';
echo "{$b}"."<br/>";
$c= 'Don\'t';
echo "{$c}"."<br/>";
$e="Don\"t";
echo "{$e}";
echo "<hr/>";

//statement function
$num1="Aye Moth";
var_dump($num1);
if(is_string("$num1")){
    echo "Your Variable is String"."<br/>";
}//string(8) "Aye Moth" Your Variable is String

$num2=80;
var_dump($num2);
if(is_numeric($num2)){
echo "Your Variable 2 is Numeric"."<br/>";
}//int(80) Your Variable 2 is Numeric

$num3=90.4;
var_dump($num3);
if(is_float($num3)){
    echo "Your Variable 3 is Float"."<br/>";
    }//float(90.4) Your Variable 3 is Float

$num4=true;
var_dump($num4);
if(is_bool($num4)){
    echo "Your Variable 4 is Boolean"."<br/>";
}//bool(true) Your Variable 4 is Boolean

$num5=[1,2,3];
var_dump($num5);
if(is_array($num5)){
    echo "Your Variable 5 is Array"."<br/>";
    }//array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } Your Variable 5 is Array


$num6=[];
var_dump($num6);
if(empty($num6)){
     echo "Your Variable 6 is empty"."<br/>";
}//array(0) { } Your Variable 6 is empty

$num7=7;
var_dump($num7);
if(is_int($num7)){
    echo "Your Variable 7 is Int "."<br/>";
}//int(7) Your Variable 7 is Int

?>