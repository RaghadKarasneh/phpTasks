<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Large Cities Again<br /></h2>
 
<?php
  $cities=array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
  );
?>
 
<form method="post">
<p>Please choose a city:</p>
<select name="city">
<?php
  foreach($cities as $value){
    echo "<option value=\"$value\">$value</option>\n";
  }
?>
 
</select> </p>
<input type="submit" name="submit" value="Go">
</form>
 
<?php
    if(isset($_POST['submit'])){
    $city=$_POST['city'];

    $country=array_search($city, $cities);

    echo "<p>$city is in $country.</p>" ;
    }
?>
</body>
</html>