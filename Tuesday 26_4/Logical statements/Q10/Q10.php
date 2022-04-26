<?php
//Write php script to check if a person is eligible to vote, minimum age required for voting is 18
$age=$_POST['age'];
if($age>= 18)
    echo 'Your age is '. $age. ', you are eligible to vote';
else
    echo 'Your age is '. $age. ', you are not eligible to vote';
?>