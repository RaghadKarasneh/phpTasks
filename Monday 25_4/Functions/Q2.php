<?php
//Write a PHP script to reverse a string
function stringReverse($string){
    return strrev($string); //Built in function to reverse the strings
}
$string= 'remove';
echo stringReverse($string);
?>