<?php
//Create a script to generate the following pattern, using the nested for loop. 

$rows=array("1","2","3","4","5");
for ($i = 0; $i < sizeof($rows); $i++) //sizeOf returns the number of elements in an array.
{
    for ($j = 1; $j < sizeof($rows)-$i; $j++)
    {
        echo "1 ";
    }

    for ($k = 0; $k <= $i; $k++)
    {
        echo "$rows[$i] ";
    }

    echo "<br>";
    // System.out.println(); 
}
?>
