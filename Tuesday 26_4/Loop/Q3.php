<?php
//Create a script to generate the following pattern, using the nested for loop.

$rows=array("A","B","C","D","E");
for ($i = 0; $i < sizeof($rows); $i++) //sizeOf returns the number of elements in an array.
{
    for ($j = 1; $j < sizeof($rows)-$i; $j++)
    {
        echo "A ";
    }

    for ($k = 0; $k <= $i; $k++)
    {
        echo "$rows[$i] ";
    }

    echo "<br>";
    // System.out.println(); 
}
?>
