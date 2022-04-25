<?php
//Write a PHP script to sort the following associative array depending on the key value [asc] : 
$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple");
asort($fruits);
foreach($fruits as $char=> $fruitName)
{
    echo $char . '= '. $fruitName . '<br><br>';
}

?>