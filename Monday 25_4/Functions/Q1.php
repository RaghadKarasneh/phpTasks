<?php
//Write a PHP script to check if the inserted number is a prime number 
function checkPrimeNumber($num){
    if ($num == 1){
       return 0;
    }
    for ($i=2 ; $i<=$num/2; $i++){
        if ($num % $i==0){
            return 0;
     }
  }
  return 1;
}

$num = 3;
if(checkPrimeNumber($num)==1)
{
    echo $num. ' is a prime number';
}
else{
    echo $num. ' is not a prime number';
}
?>