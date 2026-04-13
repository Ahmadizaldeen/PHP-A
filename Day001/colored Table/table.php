<html>
<head>
	<style>
		table{border-collapse: collapse;}
		td{width: 100px; height: 100px; border : 4px solid ;}
	</style>
</head>
<body>
<?php 
$color2 = "green";
$color4 = "red";
$color3 = "blue";
$color1 = "gray";
?>
<table>
	<?php
		require_once "row1.php";echo $row;
		require_once "row2.php";echo $row;
		require_once "row3.php";echo $row;
		require_once "row4.php";echo $row;
	?>
</table>
</body>
</html>