<?php
include ("conexion.php");
$upc=$_POST["upc"];
$producto=$_POST["prod"];
$categoria=$_POST["categ"];
$cantidad=$_POST["cant"];
$preciomenor=$_POST["preciomenor"];
$preciomayor=$_POST["preciomayor"];


$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


mysqli_select_db($conexion,"stock_in");

if ($q= "SELECT upc FROM productos WHERE upc=$upc") {
  $reg=mysqli_query($conexion, $q);
  $upc_reg=mysqli_fetch_array($reg);
  if ($upc_reg['upc']==$upc) {
    header("location:../mensajes/error-agregar.html");
  }else {
    $altaprod = "INSERT INTO productos (id,upc,imagen,producto,categoria,cantidad,precioxmenor,precioxmayor) VALUES ('', '$upc', '$imagen', '$producto', '$categoria', '$cantidad', '$preciomenor', '$preciomayor')";
    if (mysqli_query($conexion, $altaprod)) {
      header("location:../mensajes/confirmacion-agregar.html");
    }else {
      echo "a ocurrido un error";
    }
  }
};



 ?>
