<html>
<head>
	<style>
		table{border-collapse: collapse;}
		td{width: 100px; height: 100px; border : 4px solid ;}
	</style>
</head>
<body>
<?php 
$colors = ["green","red","blue","gray"];
?>
<table>
	<?php
	
		for($i =0; $i < count($colors) ;$i++ ){
			$color = $colors[$i];
			require "row.php";
			echo $row;
		}
	?>
</table>
</body>
</html>