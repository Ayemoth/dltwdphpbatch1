<?php
echo "<title>Array</title>";

$val=["red","green","blue","black","white"];//manual array
var_dump($val);
echo $val[3];
echo "<hr/>";

$val2=["one"=>"this is post one",
"two"=>"this is post two",
"three"=>"this is post three"];//associative array
var_dump($val2);
echo $val2["two"];
echo "<hr/>";

$val3=[
    "ag"=>["age"=>"23","profession"=>"doctor"],
    "mg"=>["age"=>"43","profession"=>"marchant"],
    "kg"=>["age"=>"32", "profession"=>"housekeeper"]
];//Multi dimensional array
var_dump($val3);
echo "<hr/>";

echo $val[0];//maunual array
echo "<hr/>";

echo $val2["one"];//associative array
echo "<hr/>";

echo $val3["ag"]["age"]." ".$val3["ag"]["profession"];//multi dimensional array
echo "<hr/>";

foreach($val as $d){
    echo $d."<br/>"."<hr/>";
}//maunual array

foreach($val2 as $key=>$value){
    echo $key."<br/>";
    echo $value."<br/>";
}
echo "<hr/>";

foreach ($val3 as $mul){
    foreach($mul as $z=>$y)
 {   echo $y." ";
}
}




?>