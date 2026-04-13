<html>
    <head>
        <meta charset = "utf-8">
        <title>PHPA</title>
    </head>
    <body>
        <h1 style = "color:red" onclick = "colorit(this);">Hallo Welt</h1>
		<?php 
		$sprache = "PHP";
		echo "Hallo von " . $sprache;
		?>
    </body>
</html>
<script>

    function colorit(param){
	param.style.color ="blue"
}
</script>
<!--
http://localhost/fag57/phpa/seite1.php
http://127.0.0.1/fag57/phpa/seite1.php
-->