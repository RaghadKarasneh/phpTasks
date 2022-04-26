<?php
//Write a program to calculate and print the Fibonacci sequence using a for loop. Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
$num=0;
$firstNum=0;
$secondNum=1;
while ($num<10){
    $thirdNum= $firstNum + $secondNum;
    echo $thirdNum.' ';
    $firstNum = $secondNum;
    $secondNum = $thirdNum;
    $num =$num+1;
}
?>