<?php
//Write PHP script to calculate the monthly electricity bill according to these rules
$units=$_POST['number'];

if($units<=50)
    echo 'The monthly electricity bill is '. $units* 2.50 .' JOD/Unit';
else if ($units>50 && $units<=150)
    echo 'The monthly electricity bill is '. $units* 5.00 .' JOD/Unit';
else if ($units>150 && $units<=250)
    echo 'The monthly electricity bill is '. $units*  6.20 .' JOD/Unit';
else if ($units>250)
    echo 'The monthly electricity bill is '. $units*  7.50 .' JOD/Unit';
?>