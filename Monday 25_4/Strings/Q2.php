<?php
//Write a PHP script splitting the following numeric string to be a date format
$date = '085119';
echo 'The original date is: ' .$date;
echo '<br><br>';
echo 'The new date is: '.substr(chunk_split($date,2,':'),0,-1);
?>