<?php
//Learning about "Numeric Array"
echo "<title>Array</title>";

$names = array("Hla Hla", "Mya Mya", "Zaw Zaw", "Tin Tin");
echo $names[2];

echo "<hr/>";

echo "$names[1] knows $names[0] but $names[2] doesn't know $names[0].";

echo "<hr/>";

//Associative Array
$people = array ("Hla Hla"=>"18", "Mya Mya"=>"29", "Zaw Zaw"=>"23", "Tin Tin"=>"35");
echo $people['Mya Mya'];

echo "<hr/>";
//Multi-dimensional Arrays
//this is creating a two-dimensional array that contains 3 arrays:
$person = array('online'=>array('Zaw','Mya'),'offline'=>array('Hla','Tin','Min'),'away'=>array('Tun','Thun'));
echo $person['online'][1];//output Mya
echo "<hr/>";
echo $person['away'][0];//output Tun

?>