<?php
//Write a PHP script to see if the specified year is a leap year or not.
$year=$_POST['year'];

if (($year%4 ==0) & ($year%100 !=0) | ($year%400 ==0))
   { echo $year.' is a leap year.';}
else
    {echo $year.' is not a leap year.';}
?>