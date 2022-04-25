<?php
$string = 'Hello! This is first string task in php.';
echo 'Tha main string is:'. $string;
echo '<br> <br>';
//To Uppercase
echo '1- To Uppercase: '. strtoupper($string);
echo '<br> <br>';
//To Lowercase
echo '2- To Lowercase: '. strtolower($string);
echo '<br> <br>';
//Upeercase the first letter of the string 
echo '3- Upeercase the first letter of the string: '. ucfirst($string);
echo '<br> <br>';
//Upeercase the first letter of each word
echo '4- Upeercase the first letter of each word: '. ucwords($string);
echo '<br> <br>';
?>