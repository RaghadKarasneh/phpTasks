<?php
//Write a PHP script to put a string in an array, use the (var_dump) to view the array
$string='Twinkle, twinkle, little star.';
$array=explode('<br>', $string); // To break the string to array
var_dump($array);
?>