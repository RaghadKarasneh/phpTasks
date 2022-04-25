<?php
//Write a PHP script to extract the file name from the URL
$path = 'www.orange.com/index.php';
$file_name= substr(strrchr($path, '/'), 1);
echo 'The filename from www.orange.com/index.php is: <br> <br>'.$file_name
?>