<?php
$name = "kLaUs";
echo "Benutzer Eingabe: " . $name . "<br>";
$name = strtolower($name);
$first = substr($name,0,1);
$first = strtoupper($first);
$rest_name = substr($name,1);
$richtig = $first.$rest_name;
echo "richtig ist : ". $richtig;
?>

