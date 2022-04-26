<?php
//Create a script to generate the following pattern, using the nested for loop.
for ($i=1; $i <= 5  ; $i++) { 

    for ($x=1; $x <= 5 ; $x++) { 
        if($x == $i)
        {
            echo $i;
        }
        else
        {
            echo '0';
        }
    }
    echo "<br>";
}


?>