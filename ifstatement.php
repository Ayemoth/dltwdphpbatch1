<?php
echo "IF STATEMENT"; 
echo "<hr/>";

$val="white";
$vbl=$val;

echo $vbl;//assgin by ref val

echo "<hr/>";
#if statement
if($val=="red"){
    echo "my fav color is red";
}else{echo "my fav color is white";
}

/*this is coment line 1
this is coment line 2
this is coment line 3*/
echo "<hr/>";

if($val=="red"){
    echo "my fav color is red"." "."input value is" ." ". $val;
}else{
    echo "my fav color is red"." "."but input value is" ." ". $val;
}

echo "<hr/>";

if($val=="red"){
echo "value color is ". $val;
}elseif($val=="white"){
echo "your color is ". $val;
}else{
echo "value color is ". $val;
}

echo "<hr/>";

//Logical Operator
$num1=25;
$num2=35;
$num3=0;

if ($num1 > $num2 || $num1 > $num3){
echo "true";
}else {
    echo "false";
}
echo "<hr/>";
if ($num1 < $num2 && $num1 > $num3){
echo "true";}else{
    echo "false";
}
echo "<hr/>";

if($num1!=$num2){
    echo "true";
}else{
    echo "false";
}
echo "<hr/>";

switch ($num1){
case 89:
    echo "the input value is ". $num1;
break;
case 76:
    echo "the input value is ". $num1;
break;
default:
echo "the input value is not 89 or 76 ". "value is ".$num1; 
}
    ?>