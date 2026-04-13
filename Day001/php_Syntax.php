<html>
<body>
	<h1> PHP Syntax</h1>
	<?php
		$name = "john doe";
		$Name = "John Doe";
		/*
		$_name
		§nach_name_1
		§kleinbuchstaben
		*/
	?>

	<?php
		echo $name. "<br>";
		echo $Name . "<br>";
	?>

	<?php
		//Kommentar
		# Kommentar
		/*Kommentar*/
	?>

	<?= $Name?> <!-- echo Tag -->
		<br>

	<?php
		echo "Namen: ". $name . " und " .$Name . "<br>"
	?>
</body>
</html>