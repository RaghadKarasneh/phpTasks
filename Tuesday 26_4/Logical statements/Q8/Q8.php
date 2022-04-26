<?php
//Write PHP script to calculate the monthly electricity bill according to these rules
$units=$_POST['number'];

if($units<=50)
    echo 'The monthly electricity bill is 2.50JOD/Unit';
else if ($units>50 && $units<=150)
    echo 'The monthly electricity bill is 5.00JOD/Unit';
else if ($units>150 && $units<=250)
    echo 'The monthly electricity bill is 6.20JOD/Unit';
else if ($units>250)
    echo 'The monthly electricity bill is 7.50JOD/Unit';
?>