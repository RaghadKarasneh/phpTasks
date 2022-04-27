<?php
/*session_start();

$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
echo 'The email is '. $_SESSION['email'].' and the password is '.$_SESSION['password'];
*/
$email=$_POST['email'];
$password=$_POST['password'];
echo 'The email is '. $email.' and the password is '.$password;
?>