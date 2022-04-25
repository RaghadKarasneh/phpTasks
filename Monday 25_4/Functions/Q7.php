<?php
//Write a PHP function that checks whether a passed string is a palindrome or not

function checkPalindrome($string){
    $newString=preg_replace('/[^A-Za-z0-9]/g', '', $string);
   
    if($newString == strrev($newString)){
        echo 'Yes, it is a palindrome';
    }else{
        echo 'No, it is not a palindrome';
    }
}
checkPalindrome('Eva, can I see bees in a cave?');
?>