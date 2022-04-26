<?php
//Write PHP script to find the largest number between the three integers
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$num3=$_POST['number3'];
$max=$num1;
if($num2>$max & $num2 > $num3)
{   
    $max=$num2;
    echo 'The largest number is: '. $max;
}
else if ($num3>$max & $num3>$num2)
{
    $max=$num3;
    echo 'The largest number is: '. $max;
}
else
    echo 'The largest number is: '. $max;
?>