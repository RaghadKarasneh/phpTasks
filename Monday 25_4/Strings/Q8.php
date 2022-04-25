<?php
//Write a PHP script to replace the first word of the sentence with another word
$string= 'That new trainee is so genius.';
echo 'The string before replacing is: '. $string;
echo '<br> <br>';
echo 'The string after replacing is: '. preg_replace('/That/','The', $string,1)
?>