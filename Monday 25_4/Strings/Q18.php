<?php
//Write a PHP script to remove comma(s) from the following numeric string
$string='2,543.12';
echo 'The original string is: '.$string;
echo '<br><br>';
echo 'The new string is: ' .str_replace(',','',$string);
?>