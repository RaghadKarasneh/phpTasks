<?php
//Write a PHP program to generate and display the first n lines of a Floyd triangle
$num=5;
$count=1;
for ($i=$num; $i>0;$i--)
    {
        for($j=$i;$j<$num+1;$j++)
        {
            printf("%4s",$count);
            $count++;
        }
        echo '<br>';
    }

?>