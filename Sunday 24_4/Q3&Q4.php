<?php

//Q3
$userName=$_POST['userName'];
echo 'You Name Is: '. $userName;

//Q4

$ipaddress=getenv('REMOTE_ADDR');
echo ' Your IP Address is '. $ipaddress;
?>