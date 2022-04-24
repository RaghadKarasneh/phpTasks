<?php
$url='https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme'];
echo '<br>';
echo 'Host : '.$url['host'];
echo '<br>';
echo 'Path : '.$url['path'];
?>