<?php

$back= "<a href='markproject(s).php'>Go Back</a> ";


if (isset($_POST["submit"])){

    if ($_SERVER ["REQUEST_METHOD"] == "POST" ){
        $mark=$_POST["mark"];

        if ($mark<=20){
            echo "Your grade is E"."<br/>".$back;
        }
        elseif ($mark >=21 && $mark <= 40){
            echo "Your grade is D"."<br/>".$back;
        }
        elseif ($mark>=41 && $mark <= 60){
            echo "Your grade is C"."<br/>".$back;
        }
        elseif ($mark>=61 && $mark <= 80){
            echo "Your grade is B"."<br/>".$back;
        }
        elseif ($mark >=81 && $mark <= 100){
            echo "Your grade is A"."<br/>".$back;
        }else {
            echo "Error";
        }

    }
}
?>