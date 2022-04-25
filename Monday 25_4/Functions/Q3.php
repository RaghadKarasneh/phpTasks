<?php
//Write a PHP script to check if the all string characters are lower cases
function checkLowerLetters($string){
    if($string==strtolower($string)){ //strtolower is a built in function to change the characters to lower case
        echo 'Your String is Ok';
    }
    else{
        echo 'remove';
    }
}
checkLowerLetters('hello')
?>