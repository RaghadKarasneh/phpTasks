<?php
    $multiCity=array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q9</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h2>City Table<br /></h2>
<table>
<thead>
<tr>
<th>
<?php
echo $multiCity[0][0] ."</th>\n<th>";
echo $multiCity[0][1] ."</th>\n<th>";
echo $multiCity[0][2] ."</th>\n";
?>
</tr>
</thead>
<?php
$num = count($multiCity); //Find the number of rows in the array
for ($row=1; $row<$num; $row++){
  echo "<tr>\n";
  foreach ($multiCity[$row] as $value){
    echo "<td>$value</td>\n";
    }
   echo "</tr>\n";  
}
?>
</table>
</body>
</html>