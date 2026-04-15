<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Lotto spielen</title>
	<style></style>
	<link rel = "stylesheet" href = "css/style.css">
	<script src = "js/script.js"></script>
</head>
<body>
	<header><h1>Vorlage</h1></header>
	
	<nav>
		<?php require_once "include/navigation.php"; ?> 
	</nav>
	
	<main>
		<?php require_once "include/lotto_generator.php";	?>
	</main>
	<footer>
		<p>&copy; Me, Myself & I 2026</p>
		<?php require_once "include/navi_footer.php"; ?>
	</footer>
</body>
</html>