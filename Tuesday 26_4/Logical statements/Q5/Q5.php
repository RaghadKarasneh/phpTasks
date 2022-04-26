<?php
//Write in PHP script to check if the given positive number is a multiple of 3.
$num=$_POST['number'];
if ($num >=0){
    if($num %3 == 0)
        echo $num.' is a mutilpe of 3';
    else
        echo 'false';
}
else
    echo $num. ' is a negative number.'
?>