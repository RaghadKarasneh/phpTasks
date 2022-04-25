<?php
//Write a PHP script splitting the following numeric string to be a date format
$date = date_create_from_format('dmy','085119');
echo date_format($date,'m:d:y');
?>