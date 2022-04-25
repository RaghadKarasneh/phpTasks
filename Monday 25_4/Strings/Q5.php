<?php
//Write a PHP script to extract the username from the following email address. 
$string='info@orange.com';
$username= strstr($string, '@', true);
echo 'The username from info@orange.com is: <br> <br>'.$username;
?>