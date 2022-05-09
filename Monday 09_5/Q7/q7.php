<?php
//Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures

$temp= "68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83";

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