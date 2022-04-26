<?php
//Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
$temp=$_POST['temp'];
if ($temp<20)
    echo 'The temperature is '.$temp. '. It is winter time!';
else
    echo 'The temperature is '.$temp. '. It is summer time!';
?>