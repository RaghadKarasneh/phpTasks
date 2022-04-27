<?php
//Write php script to make a calculator, the calculator should contain the four main operations
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$operator=$_POST['operator'];

if ($operator == '+')
{
    $result=$num1+$num2;
    echo ' The addition of '. $num1. ' and'. $num2 .' is: '. $result;
}
else if ($operator == '-')
{
    $result=$num1-$num2;
    echo ' The subtraction of '. $num1. ' and'. $num2 .' is: '. $result;
}
else if ($operator == '*')
{
    $result=$num1*$num2;
    echo ' The multiplication of '. $num1. ' and'. $num2 .' is: '. $result;
}
else if ($operator == '/')
{
    $result=$num1/$num2;
    echo ' The division of '. $num1. ' and'. $num2 .' is: '. $result;
}
?>