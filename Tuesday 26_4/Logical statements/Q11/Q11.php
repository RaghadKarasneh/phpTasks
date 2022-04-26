<?php
//Write php script  to check whether a number is positive, negative or zero
$num=$_POST['number'];

if ($num<0)
    echo $num. ' is a negative number';
else if ($num==0)
    echo ' The entered number is zero';
else if ($num>0)
    echo $num. ' is a positive number';
?>