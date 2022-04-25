<?php
//Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country.
$cities= array( 
    "Italy"=>"Rome", 
    "Luxembourg"=>"Luxembourg", 
    "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", 
    "France" => "Paris", 
    "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid" );
    asort($cities); //To sorts an associative array in ascending order according to the value.
    foreach ($cities as $country => $capital) {
       echo 'The capital of '. $country .' is '.$capital. '<br><br>';
    }
?>