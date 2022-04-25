<?php
//Write a PHP function to swap to variables
function swap($firstString, $secondString){
    $thirdString=$firstString;
    $firstString= $secondString;
    $secondString=$thirdString;
    echo $thirdString.' has been swapped to: '. $firstString. '<br>';
    echo $firstString.' has been swapped to: '. $thirdString. '<br>';
}
swap(12, 10);

//Please note that Q5 is similar to Q4
?>

