<?php

	$text1 = "Guten Morgen Berlin";
	$text2 = 'Guten Morgen Berlin';
	$text3 = 'Guten Morgen "Berlin"';
	$text4 = "Guten Morgen \"Berlin\"";

	echo $text1 . "<br>";
	echo $text2 . "<br>";
	echo $text3 . "<br>";
	echo $text4 . "<br>";

	$ort = "Berlin";
	$text5 = 'Guten Morgen "$ort"';
	echo $text5 . "<br>";
	
	$text6 = "Guten Morgen \"$ort\"";
	echo $text6 . "<br>";


	echo "Hallo $ort mit Interpolation ersetzt";
	?>