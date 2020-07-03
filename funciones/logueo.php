<?php
$user= $_POST ["user"];
$password=$_POST ["password"];

$admin="admin";
$adminpw="1234";

if ($user===$admin && $password===$adminpw) {
  session_start();

  $_SESSION["user"]=$user;

  /*header("Location: ../index.php");*/
  echo "<script>
         alert('te has logueado correctamente');
         window.location= '../index.php'
        </script>";
}else {
  DIE("error: el usuario o contraseña son incorrectos");
}


  ?>
