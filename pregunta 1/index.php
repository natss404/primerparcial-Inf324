<html>
<head>
<title>Página facultad</title>
<style>

@import url('https://fonts.googleapis.com/css?family=Oswald:500');
@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

.back{
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background:url(https://www.umsa.bo/documents/20142/33077/BANNER.png/871e3ed0-0719-4712-e388-077371b29903?t=1529102283119) no-repeat top center;
  background-size:contain;
}

nav{
  width: 100%;
  position: relative;
  top:50px;
  text-align:right;
}
nav a{
  font-family: 'Oswald', sans-serif;
  font-weight:500;
  text-transform:uppercase;
  text-decoration:none;
  color:#16151b;
  margin:0 15px;
  font-size:13px;
  letter-spacing:1px;
  position:relative;
  display:inline-block;
}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 3px;
  background:#16151b;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;

}
@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}

@for $i from 1 through 5 {
  nav a:nth-child(#{$i}){
    animation:show .2s #{$i*0.1+1}s ease 1 both;
  }
}

 .image{
	
     
      width: 100%;
      height: 100%;
      background-image: url(umsa.png);
	  background-size: auto;
	 
    }


body{
  background-color: lightgrey;
  font-family: sans-serif;
}

.container{
	position: absolute;
	top:220px;
	left:230px;
  margin: auto;
  background-color: lightgrey;
  width: 900px;

  padding: 0px;
}

ul, li {
    padding: 0;
    margin: 0;
    list-style: none;
}

ul.slider{
  position: relative;
  
  width: 900px;
  height: 400px;
}

ul.slider li {
    position: absolute;
    left: 0px;
    top: 0px;
    opacity: 0;
    width: inherit;
    height: inherit;
    transition: opacity .5s;
    background:#fff;
}

ul.slider li img{
  width: 100%;
  height: 400px;
  object-fit: cover;
}

ul.slider li:first-child {
    opacity: 1; /*Mostramos el primer <li>*/
}

ul.slider li:target {
    opacity: 1; /*Mostramos el <li> del enlace que pulsemos*/
}

.menu{
  text-align: center;
  margin: 20px;
}

.menu li{
  display: inline-block;
  text-align: center;
}

.menu li a{
  display: inline-block;
  color: white;
  text-decoration: none;
  background-color: grey;
  padding: 10px;
  width: 20px;
  height: 20px;
  font-size: 20px;
  border-radius: 100%;
}

body {
    overflow-y:hidden;
	}

.middle{
  position: absolute;
  top: 50%;
  left: 50%;

  transform: translate(-50%,-50%);
}
.btn{
  position: relative;
  top: -160px;
  display: block;
  color: black;
  font-size: 14px;
  font-family: "montserrat";
  text-decoration: none;
  margin: 30px 0;
  border: 2px solid black;
  padding: 14px 146px;
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

.btns{
  position: relative;
  top: 50px;
  left:-140px;

  display: block;
  color: black;
  font-size: 10px;
  font-family: "montserrat";
  text-decoration: none;
  margin: 30px 0;
  border: 2px solid black;
  padding: 14px 146px;
  text-transform: uppercase;
  overflow: hidden;
  transition: 1s all ease;
}
.btns::before{
  background: white;
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: -1;
  transition: all 0.6s ease;
}

.btn2::before{
  width: 0%;
  height: 100%;
}

.btn2:hover::before{
  width: 100%;
}

.grad{
	position: relative;
	top: 20px;
	left: -160px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}


.ingresar{
	position: absolute;
	top: calc(70% - 75px);
	left: calc(-40% - 50px);
	height: 150px;
	width: 350px;
	padding: 15px;
	z-index: 2;
}

.ingresar input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.ingresar input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.ingresar input[type=submit]{
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.ingresar input[type=submit]:hover{
	opacity: 0.8;
}

.ingresar input[type=submit]:active{
	opacity: 0.6;
}

.ingresar input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.ingresar input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.ingresar input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>
</head>
<body>

<?php
 include "conexion.inc.php";
 
 $sql="select * from persona";
 $resultado=mysqli_query($conn, $sql);
 
 ?>

<div class="back">
<nav>
  <a href="http://www.fcpn.edu.bo/">Facultad de ciencias puras y naturales</a>
  <a href="http://www.informatica.edu.bo/">Carrera de Informática</a>
  <a href="http://www.carrera-derecho.edu.bo/">Carrera de Derecho</a>
  <a href="http://faadu.umsa.bo/">Carrera de Arquitectura</a>
  <a href="http://agro.umsa.bo/">Carrera de Agronomia</a>
</nav>
</div>


<div class="image">
<div class="container">
  
  <ul class="slider">
    <li id="slide1">
      <img src="https://biblioteca-central.umsa.bo/documents/349114/0/1.jpg/3c123f16-bfd5-11cc-f4ec-459e941b9526?t=1561384656874"/>
    </li>
    <li id="slide2">
      <img src="https://carlosdmesa.files.wordpress.com/2017/07/img_0239.jpg"/>
    </li>
    <li id="slide3">
       <img src="https://www.la-razon.com/wp-content/uploads/2020/06/umsa.jpg"/>
    </li>
	<li id="slide4">
       <img src="https://lh3.googleusercontent.com/proxy/AmoG_FDr0HR33HlDDQuX25PRrOV95SrM43CO7Ldaj9kbDl_Mx7OOf0uFK1JzPAa-xiqqZQo8cp0Cal_RIOpddjZfZo861phr-bzJAngaEjIl9Q"/>
    </li>
	<li id="slide5">
       <img src="https://www.umsa.bo/documents/20142/33077/umsa.jpg"/>
    </li>
  </ul>
  
  <ul class="menu">
    <li>
      <a href="#slide1">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
     <li>
      <a href="#slide3">3</a>
    </li>
	<li>
      <a href="#slide4">4</a>
    </li>
	<li>
      <a href="#slide5">5</a>
    </li>
  </ul>
  
</div>
  </div>

  <div class="middle">
      <a href="notas.php" class="btn btn1">Ver notas</a>
	  
	  
		  <div class="ingresar">
   <form action="Login.php" method="POST">
     <input type="text" placeholder="usuario" name="usuario"/>
     <input type="password" placeholder="password" name="password"/>
     <input type="submit" value="ingresar"/>
  </form>
 
   </div>
   
   </div>
   


<a class="thx" href="http://unsplash.com/@oldskool2016?utm_campaign=photographer-credit" target="_blank" rel="noopener noreferrer" <svg xmlns="http://www.w3.org/2000/svg" style="mviewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span></a>


</body>
</html>