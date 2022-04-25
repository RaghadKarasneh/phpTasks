<?php
//Write a PHP script to remove Special characters from the following string
$string='\"\1+2/3*2:2-3/4*3';
echo 'The original string is: '.$string;
echo '<br><br>';
echo 'The new string is: '.str_replace(str_split('\\/:*?"<>|+-'), ' ', $string);
?>