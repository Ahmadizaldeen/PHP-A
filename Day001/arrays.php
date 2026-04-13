<?php
	echo "numerischen Arrays mit index:<br>";
	$farben = ["red", "green", "blue", "orange"];
	echo $farben[0];
	echo "<br>";
	
	echo "associative array key=>value: <br>";
	$farben2 = [0=>"red", 1=>"green", 2=>"blue", 3=>"orange"];

	$person = ["anrede"=>"herr", "vorname"=>"john", "nachname"=>"doe"];
	echo $person['vorname'];
?>