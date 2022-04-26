<?php
//Write a PHP program to print the following pattern. 
$space = 0;
$letters = 4;
for ($i=0; $i < 5 ; $i++) { 
 echo "<pre>"; // <pre> to display in a fixed-width font, and the text preserves both spaces and line breaks
    for ($x=$space; $x < 4; $x++ ) { 
       echo " ";
    }
    $letter = "A";
    for ($y=$letters; $y <=4 ; $y++) { 
        echo $letter . " ";
        $letter++;
    }
    echo "</pre>";
 
    $space++;
    $letters--;
}
$space1 = 0;
$letters1 = 3;
for ($i=0; $i < 5 ; $i++) { 
    echo "<pre>";
       for ($x=$letters1; $x < 4; $x++ ) { 
          echo " ";
          
       }
       $letter = "A";
       for ($y=$space1; $y <=3 ; $y++) { 
           echo $letter . " ";
           $letter++;
       }
       echo "</pre>";
    
       $space1++;
       $letters1--;
   }

?>