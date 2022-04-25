<?php
// Write a PHP script to generate simple random passwords [do not use rand () function] from a given string
function randomPassword($num){
    $data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data),0,$num);
}
echo 'Your password cosist of 15 character which is: 'randomPassword(15)
?>