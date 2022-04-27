<?php

if(isset($_POST['keys_submit'])){
    $keywords=$_POST['keywords'];
    header("location: ".$keywords);
}
?>