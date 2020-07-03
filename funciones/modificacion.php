<?php
include("conexion.php");

mysqli_select_db($conexion, "stock_in");

$upc=$_POST["upc"];
$producto=$_POST["prod"];
$categoria=$_POST["categ"];
$cantidad=$_POST["cant"];
$preciomenor=$_POST["preciomenor"];
$preciomayor=$_POST["preciomayor"];

/*$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));*/

/*$modificar = "UPDATE productos SET id='' upc='$upc' producto='$producto', categoria='$categoria', cantidad='$cantidad', precioxmenor='$preciomenor', precioxmayor='$preciomayor' WHERE upc=$upc";*/

$modificar="UPDATE productos SET upc='$upc', producto='$producto', categoria='$categoria', cantidad='$cantidad', precioxmenor='$preciomenor', precioxmayor='$preciomayor' WHERE upc=$upc";

if (mysqli_query($conexion, $modificar)) {
  header("Location: ../mensajes/confirmacion-modificar.html");
} else {
  echo "no se pudo modificar el producto";
};

?>
