<?php
//Write a PHP to find the grade for the student, after calculating the average of his score in all the subject
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$num3=$_POST['number3'];
$num4=$_POST['number4'];
$num5=$_POST['number5'];
$num6=$_POST['number6'];
$num7=$_POST['number7'];
$num8=$_POST['number8'];
$num9=$_POST['number9'];
$sum=$num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9;
$avg=$sum/9;

if($avg <60)
    echo 'Your grade is: F';
else if($avg >=60 && $avg<70)
    echo 'Your grade is: D';
else if($avg >=70 && $avg<80)
    echo 'Your grade is: C';
else if($avg >=80 && $avg<90)
    echo 'Your grade is: B';
else if($avg >=90 && $avg<100)
    echo 'Your grade is: A';
?>