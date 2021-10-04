<html>
<head>
<title> Notas </title>
</head>
<style>

body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
	 background-color: lightgrey;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
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
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
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

 .image{
	
     
      width: 100%;
      height: 100%;
      background-image: url(umsa.png);
	  background-size: auto;
	 
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
}
</style>
<body>
<?php
 include "conexion.inc.php";
 
 $sql="select * from nota";
 $resultado=mysqli_query($conn, $sql);
 //print_r($resultado);
 
 ?>
 
 <div class="image">
 
  <table> 
 <thead>
	<tr>
		<th><strong> Carnet </strong></th>
		<th> <strong>Sigla </strong></th>
		<th> <strong> Nota 1 </strong></th>
		<th> <strong> Nota 2 </strong></th>
		<th> <strong>Nota 3 </strong></th>
		<th> <strong> Nota 4 </strong></th>
	</tr>
</thead>
<tbody>


  <div class="middle">
      <a href="index.php" class="btn btn1">Volver</a>
   </div>
   
</div>



 <?php
 while($fila=mysqli_fetch_array($resultado)) {
 //print_r($fila);
 //echo $fila["nombre"]."<br/>";
	echo "<tr>";
	echo "<td> <strong>".$fila["ci"]."</strong></td>";
	echo "<td><strong> $fila[sigla]</strong></td>";
	echo "<td> <strong>".$fila['nota1']."</strong></td>";
	echo "<td> <strong>".$fila['nota2']."</strong></td>";
	echo "<td> <strong>".$fila['nota3']."</strong></td>";
	echo "<td> <strong>".$fila['notafinal']."</strong></td>";
	echo "</tr>";
 }
?>

 </body>
 </html>