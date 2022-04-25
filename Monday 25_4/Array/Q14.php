<?php
//Write a PHP script that returns the lowest integer in the array  that is not 0
$array1 = array( 2, 0, 10, 12, 6);
echo 'The lowest integer in the array is: '.min(array_diff(array_map('intval', $array1), array(0)));
/*
array_dif => compares the values of two (or more) arrays
array_map => creates a new array from calling a function for every array element.
intval => is a callback function to return the integer value of the variable
*/
?>