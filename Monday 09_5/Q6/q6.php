
<!-- ************** NOT COMPLETED ************** -->

<h2>How Are You Traveling?</h2>
 
<?php
//If form not submitted, display form.  

?>
<p>Travel takes many forms, whether across town, across the country, or
 around the world. Here is a list of some common modes of transportation:</p>
<ul>
 
<?php
if (!isset($_POST['submit'])){
    $travel=array(
      "Automobile",
      "Jet",
      "Ferry",
      "Subway"
    );
foreach ($travel as $value){
  echo "<li>$value</li>\n"; 
}}

?>
</ul>
<form method="post">
    <p>Please add your favorite, local, or even imaginary modes of travel 
    to the list, separated by commas:</p>
    <input type="text" name="added">
</p>
 
<?php
//Send current travel array as hidden form data.
if (!isset($_POST['submit'])){
    $travel=array(
      "Automobile",
      "Jet",
      "Ferry",
      "Subway"
    );
foreach ($travel as $value){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$value\" />\n";
}}
?>
 
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
if (!isset($_POST['sumbmit'])){
$travel=($_POST['travel']);
$added=explode(',',$_POST['added']); //Convert user input string into an array.
array_splice($travel, count($travel), 0, $added);
echo "<p>Here is the list with your additions:</p>\n<ul>\n";
foreach($travel as $value){
  echo "<li>".trim($value)."</li>\n";  //To delete extra spaces the user may have entered.
}
echo"</ul>";  
}
?>
<p>Add more?</p>
<form method="post">
<input type="text" name="added"/>
</p>
<?php
//Send current travel array as hidden form data.
foreach ($travel as $value){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$value\" />\n";
}
?>
<input type="submit" name="submit" value="Go">
</form>
<?php
?>
</body>
</html>