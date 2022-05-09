<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Temperatures Array</title>
</head>
 
<body>
<h2>High Temperatures for Spring Month</h2>
 
<?php
$highTemps = array(
  68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 
  68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);
$count = count($highTemps); //To get the number of temps.
$total = 0; //To get the total of all temps.
foreach ($highTemps as $value){
  $total += $value;
}
$avg = round($total / $count);  //Calculate average.
echo "<p>The average high temperature for the month was $avg &amp;deg;F.</p>\n";
rsort($highTemps); //to produce a descending sort.
$topTemps = array_slice($highTemps, 0, 5);//Pull the top 5 temps.
echo "<p>The warmest five high temperatures were: <br />\n";
foreach($topTemps as $value){
  echo "$value &amp;deg;F <br/> \n";
}
echo "</p>";
$lowTemps = array_slice($highTemps, -5, 5); //Pull the bottom 5 temps.
echo "<p>The coolest five high temperatures were: <br/>\n";
foreach($lowTemps as $l){
  echo "$l &amp;deg;F <br/> \n";
}
echo "</p>";
 
?>
</body>
</html>