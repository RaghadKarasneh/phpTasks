<?php
//Write a PHP function to remove duplicates from an array
function removeDuplicates($array){
    $array = array_unique($array);
    //To convert the array to string
    $string = "";
    foreach ($array as $i) { $string .= $i; }
    echo $string;
}
$array=array(2, 4, 7, 4, 8, 4);
removeDuplicates($array);
?>