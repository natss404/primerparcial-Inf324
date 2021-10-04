<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INF 324</title>
	<style type="text/css">

body {
	background: #fafafa url(https://media.istockphoto.com/vectors/vibrant-colorfull-background-vector-id1166323937?k=20&m=1166323937&s=612x612&w=0&h=zco09J7zIb4gdMhooILE7HF6siewO64Gi_EWKidI5Yo=) ;
	color: #444;
	margin: 40px;
	text-shadow: 0 1px 0 #fff;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	 background-color: lightgrey;
}


table {

	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: black;
 
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 0px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 0px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}

.middle{
  position: absolute;
  top: 113%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.btn{
  position: relative;
  top: -150px;
  display: block;
  color: black;
  font-size: 14px;
  font-family: "montserrat";
  text-decoration: none;
  margin: 30px 0;
  border: 2px solid black;
  padding: 14px 60px;
  text-transform: uppercase;
  overflow: hidden;
  transition: 1s all ease;
}
.btn::before{
  background: white;
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: -1;
  transition: all 0.6s ease;
}

.btn1::before{
  width: 0%;
  height: 100%;
}

.btn1:hover::before{
  width: 100%;
}
</style>
	
</head>
<body>
	<h1>Docente</h1>
	
	<table>
	<thead>
	<tr>
		<th><strong>CI</strong></th>
		<th><strong>Sigla</strong></th>
	</tr>
	<?php
		echo $ci." ".$sigla;
		echo '<br>';
		foreach($docente as $doc) {

		echo "<tr>";
		echo "<th>".$doc->ci.'</th>';
		echo "<th>".$doc->sigla.'</th>';
		
		echo "<th>";
	echo "<a href='Lectura2/eliminar/".$doc->ci."'> Eliminar </a>";
	echo "</th>";
		}
	?> 
	</thead>
	</table>
	
</body>
</html>