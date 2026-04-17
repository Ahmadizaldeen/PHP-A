<?php
require_once "funktionen.php";
?>
<form action= "" method ="post">
	<label for="rows">rows</label>
	<input type= "text" name ="rows" id ="rows">
	<label for="column">Column</label>
	<input type= "text" name ="column" id ="column">
	<input type = "submit" value ="senden" name = "submit">
</form>
<?php
	print_r ($_GET);
	
	echo mk_table(5, 5);
	if(!empty($_POST['submit']))
 
	{
	echo mk_table($_GET['rows'], $_GET['column']);
	}
	
?>