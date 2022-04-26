<?php
//Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
$num=$_POST['number'];
if($num>=20 && $num<=50)
    echo 'true';
else
    echo 'false';
?>