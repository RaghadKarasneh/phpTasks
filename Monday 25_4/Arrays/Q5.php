<?php
//Write a PHP script that inserts a specific new item in an array in any position.
$array=array('1','2','3','4','5');
echo 'The array elements are: '. "\n";
foreach($array as $element)
{
    echo $element;
}
echo '<br><br>';
$newItem='$';

array_splice($array,3,0,$newItem);

echo 'The new array elements are: '. "\n";
foreach($array as $element)
{
    echo $element;
}
?>