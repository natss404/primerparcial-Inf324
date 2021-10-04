<?php

 $usuario = $_POST['usuario'];
 $pass = $_POST['password'];

 include "conexion.inc.php";
 
 $sql = "SELECT u.ci, r.nombre AS role, password FROM usuario u INNER JOIN roles r ON r.ci = u.rol_ci WHERE u.usu = '$usuario';";


 $resultado=mysqli_query($conn, $sql);
 $row= mysqli_fetch_array($resultado,MYSQLI_ASSOC);
if (password_verify($row['password'], password_hash($pass, PASSWORD_DEFAULT))) {
   $startingPage = [
      'docente' => 'index_docente.php',
	  'user' => 'index.php',
   ];



   $nextPage = array_key_exists($row['role'], $startingPage) ? $startinPage['role'] : 'index.php';
   if (array_key_exists($row['role'], $startingPage)) {
      $nextPage = $startinPage[$row['role']];
   } else {
      $nextPage = $startinPage['user'];
      error_log('There is no starting page for role '.$row['role']);
   }
   session_start();
   $_SESSION['user_ci'] = $row['ci'];
   $_SESSION['role'] = $row['role'];
   header('Location: '.$nextPage);
} else {
   header('Location: index.php');
}

if (!array_key_exists('user_ci', $_SESSION)) {
   header('Location: index_docente.php');
   die;
}

$allowedRoles = ['docente'];
if (!array_key_exists('role', $_SESSION) || !in_array($_SESSION['role'], $allowdRoles)) {
   header('Location: index_docente.php');
   die;
}

?>

<html>
<head>
<title> </title>
</head>
<body>
</body>
</html>