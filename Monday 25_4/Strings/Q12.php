<?php
//Write a PHP script to insert a string at the specified position in a given string.
$string='The brown fox';
echo 'The old string is: '.$string;
echo '<br><br>';
$newString='quick'; //The string that we want to add
$position= 4;
$fullString=substr_replace($string,$newString.' ',$position,0);
echo 'The new string is: '.$fullString;
echo '<br><br>';
?>