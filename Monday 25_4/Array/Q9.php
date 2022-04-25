<?php
//Write a PHP function to change the array's and convert all the strings to upper case
$colors = array("red","blue", "white","yellow");
print 'The array elements before converting are:';
print_r($colors);
echo '<br><br>';
$colors=array_flip($colors); // array_flip => is to exchanges all keys with their associated values in an array
$colors=array_change_key_case($colors, CASE_UPPER); // array_change_key_case => a function that changes all keys in an array to uppercase
$colors=array_flip($colors);
print 'The array elements after converting are:';
print_r($colors);
?>