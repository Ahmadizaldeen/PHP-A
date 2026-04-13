<?php

	$text1 = "Guten Morgen Berlin";
	$text2 = 'Guten Morgen Berlin'; /*Kein Unterschied zwischen Eifach/doppelte - Anführungszeichen*/
	$text3 = 'Guten Morgen "Berlin"'; /* außen '...' , innen "..." → kein Problem*/
	$text4 = "Guten Morgen \"Berlin\"";/*außen "...", innen auch "..." , deshalb escapen: \"*/

	echo $text1 . "<br>";
	echo $text2 . "<br>";
	echo $text3 . "<br>";
	echo $text4 . "<br>";

	$ort = "Berlin";
	$text5 = 'Guten Morgen "$ort"'; /*❌ Kein Interpolation mit einfachen Quotes*/
	echo $text5 . "<br>";
	
	$text6 = "Guten Morgen \"$ort\"";# ✅ Interpolation mit doppelten Quotes
	echo $text6 . "<br>";
	
	/*
		"..." → Interpolation möglich
		'...' → keine Interpolation, reiner Text
	*/

	echo "Hallo $ort mit Interpolation ersetzt"; # Interpolieren im echo
	?>