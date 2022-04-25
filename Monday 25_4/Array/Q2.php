<?php
//Write a PHP script that will display the colors as unordered list
$colorsArray=array('white','green','red');
echo '<ul>';
sort($colorsArray);
foreach ($colorsArray as $singleColor) {
    echo '<li>'. $singleColor . '</li>';
}
echo '</ul>';
?>