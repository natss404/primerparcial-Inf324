<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INF 324</title>
	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	</style>
</head>
<body>
	<h1>Titulo</h1>
	Primer ejemplo Docente 
	<?php
		echo $ci." ".$sigla;
		echo "<br>";
		//echo $sitio1."<br>";
		//echo $sitio2."<br>";
		//echo $sitio3."<br>";
		//echo site_url('Welcome.php');
	?> 
	<form method="GET" action="http://localhost:8080/code/index.php/Lectura">
		<input type="text" name="ci" value=""/><br/>
		<input type="text" name="sigla" value=""/><br/>
		<input type="submit" name="Enviar" value="Enviar"/>
	</form>
</body>
</html>