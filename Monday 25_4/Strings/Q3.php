<?php
//Write a PHP script to check whether the sentence contains a specific word
$string= 'I am a full stack developer at orange coding academy';
$newString= strtolower($string);
if (strpos($string, 'orange') !== false)
 echo 'Word found!';
else echo 'Word not found';
?>