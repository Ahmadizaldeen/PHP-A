<!--Von HTML CSS zu PHP-->
<!--
<html>
<head>
	<meta charset = "utf-8">
	<title>Farben</title>
	<style>

		div{
			float: left;
			width :25%;
			height: 20%;
			border-collapse: collapse;
			border:2px solid green;
			box-sizing: border-box:
		}
		h1{text-align: center;}
	</style>
</head>
<body>
	<h1>Colors</h1>
	<div style = "background-color: black"></div>
	<div style = "background-color: blue"></div>
	<div style = "background-color: red"></div>
	<div style = "background-color: green"></div>
</body>
</html>
-->

<html>
<head>
	<meta charset="utf-8">
	<title>Farben</title>
	<style>

	div{
	float:left;
		width:49%;
		height:20%;
		
		border-collapse: collapse;
		border:2px solid green;
		box-sizing: broder-box;
	}
	h1{text-align:center;}
</style>
</head>
<body>
<h1>Colors</h1>
	<?php
	require_once "colors.php";
	require_once "div1.php";
	require_once "div2.php";
	require_once "div3.php";
	require_once "div4.php";
	?>
</body>
</html>