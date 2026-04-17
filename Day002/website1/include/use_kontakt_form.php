<?php require_once "funktionen.php";?>
<form action="" method ="post">
	<label for="vorname">Vorname</label>
	<input type= "text" name ="vorname" id ="vorname">
	<label for="nachname">Nachname</label>
	<input type= "text" name ="nachname" id ="nachname">
	<label for="kommentar" >Kommentar</label>
	<textarea cols ="12" rows ="16" name = "kommentar"></textarea>
	<input type = "submit" value ="senden" name = "submit">
</form>
<?php

if(isset($_POST['submit']))
	if(!empty($_POST['vorname']) && !empty($_POST['nachname']) && !empty($_POST['kommentar']) ){
		echo "Hallo ". richtig($_POST['vorname']) . " " . richtig($_POST['nachname']) . "<br>";
		echo nl2br($_POST['kommentar']);
	}
	else if (empty($_POST['kommentar'])){
		echo "Hallo ". richtig($_POST['vorname']) . " " . richtig($_POST['nachname']) . "<br>";
		echo "was willst du , schreibe ein kommentar";
	}
	else {
		echo "Formular ausfüllen, bitte!";
	}


?>
	