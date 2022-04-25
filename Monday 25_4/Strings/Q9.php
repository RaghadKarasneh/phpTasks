<?php
//Write a PHP script to find the first character that is different between two strings
$firstString='dragonball';
$secondString='dragonboll';
$position=strspn($firstString ^ $secondString,"\0");
printf( 'First difference between two strings at position %d: "%s" vs "%s"',$position, $firstString[$position],$secondString[$position]);
?>