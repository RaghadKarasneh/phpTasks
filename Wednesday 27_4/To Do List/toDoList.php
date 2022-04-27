<?php
    if($_POST){
        echo "<h1> You Have To Do The Following: </h1>";
        foreach($_POST['choice'] as $val)
        {
        echo $val . "<br>";
        }
    }
    else 
        echo "<h1> You Have Nothing to do. </h1>";
?>