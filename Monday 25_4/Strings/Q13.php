<?php
//Write a PHP script to remove zeroes from the given number
$num= '0000657022.24';
echo 'The original number is: '.$num;
echo '<br><br>';
$string=str_replace('0','',$num); //ltrim is to remove specific char (0) from string
echo 'The new number is: '.$string;
echo '<br><br>';
?>