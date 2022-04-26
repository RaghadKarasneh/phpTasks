<?php
//Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
$num=5;
$multiple=1;
for($i=1;$i<=$num-1;$i++)
    $multiple=$multiple*($i+1);
echo 'The factorial of '.$num.' is '.$multiple;
?>