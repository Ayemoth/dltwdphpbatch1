<?php
echo "<title>Operators</title>";
$a=9;
$b=6;
echo "<center><h1>add,sub,mul,div,mol operators</h1></center>";
echo $a+$b;
echo "<hr/>";
echo $a-$b;
echo "<hr/>";
echo $a*$b;
echo "<hr/>";
echo $a/$b;
echo "<hr/>";
echo $a%$b;
echo "<hr/>";

//Increasement and Decreasement:
echo "<center><h1>increasement and decreasement</h1></center>";
echo $z=$a++;//9
echo $s=$a++;//10
echo $r=$a++;//11
echo "<hr/>";
echo $y=++$a;//13
echo $k=$a++;//13
echo $l=++$a;//15
echo "<hr/>";
echo $x=$a--;//15
echo $h=$a--;//14
echo $p=$a--;//13
echo "<hr/>";
echo $m=--$a;//11
echo $q=--$a;//10
echo $c=--$a;//9
echo "<hr/>";

//Comparison:
echo "<center><h1>Comparison Operator</h1></center>";
echo ($a != $b) ? "true":"false";
echo "<hr/>";

//Logical Operator:
echo "<center><strong>Logical Operator</strong></center>";
if ($a==9 xor $b==8){
    echo "true";
}else{
    echo "false";
}




?>