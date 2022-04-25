<?php
//Write a PHP script to get the shortest/longest string length from an array
$words =  array("abcd","abc","de","hjjj","g","wer");
$array= array_map('strlen',  $words); //array_map => creates a new array from calling a function for every array element. strlen=> a function that computes the length of the string
echo 'The shortest array length is ' .min($array).' '. 'The longest array length is '.max($array);

?>