<?php
//Write a PHP program to merge two arrays
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$meregedArray=array_merge($array1,$array2);
print_r($meregedArray);//print_r => is a built-in function that used to print or display information stored in a variable
?>