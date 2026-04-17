<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Vorlage</title>
	<style></style>
	<link rel = "stylesheet" href = "css/style.css">
	<script src = "js/script.js"></script>
</head>
<body>
	<header><h1>Colors</h1></header>
	
	<nav>
		<?php require_once "include/navigation.php"; ?> 
	</nav>
	
	<main>
		<?php require_once "../../000repositorie/colors.php";
		getColorsInfo();
		?>
	</main>
	<footer>
		<p>&copy; Me, Myself & I 2026</p>
		<?php require_once "include/navi_footer.php"; ?>
	</footer>
</body>
</html>