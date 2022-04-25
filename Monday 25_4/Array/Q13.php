<?php
//Write a PHP script to generate unique random 10 numbers within a specific range
$range=range(11,20);
shuffle($range); //To get random numbers between 11 and 20
for($i=0;$i<10;$i++) //(<10) depends on the range which is less than 10 numbers (9 numbers)
    echo $range[$i].' '; // To print each number alone
?>