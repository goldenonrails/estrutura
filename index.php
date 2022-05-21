<!DOCTYPE html>
<html>
<head>
	<!-- SEO -->
	<title>Hello, PHP!</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../src/assets/css/style.css">
</head>
<body>

	<div id="root"></div>

	<h3 align="center">Hello, PHP!</h3>
	<!-- JavaScript -->
	<script type="text/javascript" src="../src/assets/js/script.js"></script>
	<script type="text/javascript" src="../src/assets/js/banco.js"></script>
</body>
</html>

<?php

$str = "Olá, este é apenas um texto!";
$pattern = "/este/i";

echo preg_match_all($pattern, $str);

?>