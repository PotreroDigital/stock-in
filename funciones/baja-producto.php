<?php
include("conexion.php");
mysqli_select_db($conexion, "stock_in");


$upc=$_POST['upc'];

$eliminar= "DELETE FROM productos WHERE upc=$upc";



if (mysqli_query($conexion, $eliminar)) {
  header("Location: ../mensajes/confirmacion-eliminar.html");
} else {
  header("Location: ../mensajes/error-eliminar.html");
};


?>
