<?php
//Write a PHP script to select first 5 words from a string
$string='The quick brown fox jumps over the lazy dog';
echo 'The original string is: '.$string;
echo '<br><br>';
echo 'The new string is: '.implode(' ',array_slice(explode(' ',$string),0,5)); //impolde returns a string from the elements of an array
?>