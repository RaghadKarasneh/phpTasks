<?php
//Write a PHP script to remove part of a string
$string='The quick brown fox jumps over the lazy dog';
echo 'The original string is: '.$string;
echo '<br><br>';
echo 'The new string is: '.str_replace('fox', ' ', $string)
?>