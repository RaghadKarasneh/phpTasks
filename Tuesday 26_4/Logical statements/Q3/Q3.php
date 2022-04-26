<?php
//Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$sum= $num1 + $num2;
echo 'The sum of '. $num1. ' and '.$num2 .' is: '. $sum. '<br><br>';
if($num1 == $num2){
    $triple=$sum*3;
    echo 'The 2 numbers are the same, so the triple of their sum is: '.$triple;
}

?>