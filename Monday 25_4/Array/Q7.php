<?php
//Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures

$temp= "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

$array=explode(',',$temp); //To convert the string to array
$sum=0;
$length=count($array);
foreach($array as $singleTemp){
    $sum=$sum+$singleTemp;
}
$hightTemp=$sum/$length; //To find the Avarege temperature
echo 'Average Temperature is: '. $hightTemp. '<br><br>';

sort($array);
echo 'List of five lowest temperatures: ';
for ($i=0;$i<5;$i++)
echo $array[$i]. ' ';
echo '<br><br>';

echo 'List of five highest temperatures: ';
for ($i=($length-5);$i<$length;$i++)
echo $array[$i]. ' ';
?>