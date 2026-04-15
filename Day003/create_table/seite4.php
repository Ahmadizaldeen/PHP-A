
<html>
<head>
	<title>My Website</title>
	<link rel = "stylesheet" href = "css/style.css">
	<script src = "js/script.js"></script>
</head>
<body>
	<header>My Website</header>
	<nav>
		<?php
			require_once "include/navigation.php";
		?>
	</nav>
	<h1>Seite4</h1>
	<main>
	<?php
		require_once "include/create_table_form.php";
	?>
	</main>
	
	<footer></footer>
</body>
</html>