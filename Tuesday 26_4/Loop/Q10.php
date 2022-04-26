<?php
//10.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".

for($i=1;$i<=50;$i++)
{
  if(($i%3==0)&&($i%5!=0))
  {
    echo "Fizz ";
    
  }
   if(($i%3!=0)&&($i%5==0))
  {
     echo "Buzz ";
  }
   if(($i%3==0)&&($i%5==0))
  {
    echo "FizzBuzz ";
    
  }
   else if(($i%3!=0)&&($i%5!=0))
   {echo $i.' ';}
}

?>