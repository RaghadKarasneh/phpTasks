<?php
$cookie_name = $_POST['name'];
$cookie_value = $_POST['value'];
setcookie($cookie_name, $cookie_value, time() + 3600,'/phpTasks/'); // 3600 = 1 hour
//No domain becuse it is a localhost
// unset secure and httponly values

echo "Cookie named " . $cookie_name ." Cookie value ". $cookie_value. "The cookies will be expired after 1 hour.";
// To delete thecookie: setcookie($cookie_name,"", time() -15,'/phpTasks/'); // after 15 second
?>
