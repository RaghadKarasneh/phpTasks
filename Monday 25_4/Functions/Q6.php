<?php
//Write a PHP function to check if a number is an Armstrong number or not 

function checkArmstrong($num){
    $sum=0;
    $x=$num;
    while($x !=0 ){
        $rem = $x % 10; // To break up the digits of the main number
        $sum = $sum + $rem*$rem*$rem; //To find the cube of each number in addition to the sum of the cube of the last digit
        $x = $x /10; //To move between digits using .
    }
    if ($num == $sum)
    return 1;
return 0;
}

$num=407;
if(checkArmstrong($num) == 1)
   echo 'Yes! It is an Armstrong';
else
  echo 'No! It is not an Armstrong';
?>