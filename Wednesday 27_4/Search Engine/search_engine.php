<?php

$search_URL="https://www.google.com/search?q=";
if(isset($_POST['keys_submit'])){
    $keywords=$_POST['keywords'];
    header("location: ".$search_URL.$keywords);
}
?>