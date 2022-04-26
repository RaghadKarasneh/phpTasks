<?php
//Write a program which will count the "c" characters in the text "Orange Coding Academy".
$string='Orange Coding Academy';
$newString=strtolower($string);
$char="c";
$count=0;
for($i='0';$i<strlen($newString);$i++)
{
    if(substr($newString,$i,1)==$char)
        $count=$count+1;
}
echo 'Number of character c repetitions is: '.$count;

?>