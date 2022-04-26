<?php
//Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$sum=$num1+ $num2;
if($sum == 30){
    echo 'The sum of '. $num1. ' and '.$num2. ' is: '.$sum;
}
else
    echo 'false'
?>