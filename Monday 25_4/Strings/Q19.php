<?php
//Write a PHP script to print letters from 'a' to 'z'
for ($i= ord('a'); $i<= ord('z'); $i++)//ord is builtin function that that returns the ASCII value of the first character of a string. 
echo chr($i).' ';
?>