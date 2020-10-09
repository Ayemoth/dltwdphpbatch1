<?php
echo "<title>Continue Statement</title>";
for($i=10; $i<=25; $i++){
    if ($i==16 || $i==23){
        continue;
    }echo $i."<br/>";
}//output expect 16 and 23
for ($e=0; $e<10; $e++){
    if ($e%2==0){
        continue;
    }echo $e." ";
}//outputs are odd numbers


?>