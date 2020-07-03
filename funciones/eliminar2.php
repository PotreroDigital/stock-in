<?php
  /*include("conexion.php");
  mysqli_select_db($conexion, "stock_in");
  $consulta="SELECT*FROM productos WHERE upc=$upc";
  $datos= mysqli_query($conexion, $consulta);
  $fila2=mysqli_fetch_array($datos);
  while ($fila2=mysqli_fetch_array($datos) {
    echo "<input type="text" name="upc" value="$fila['upc']" required class="form-control" placeholder="UPC">";
  }*/


  $upc1=$_POST['upc1'];
  include("funciones/conexion.php");
  mysqli_select_db($conexion, "stock_in");
  $consulta="SELECT*FROM productos WHERE upc=$upc1";



  if ($consulta="SELECT*FROM productos WHERE upc=$upc1") {
    $datos= mysqli_query($conexion, $consulta);
    $fila2=mysqli_fetch_array($datos);
    if ($fila2['upc']==$upc1) {
      $datos= mysqli_query($conexion, $consulta);
      $fila2=mysqli_fetch_array($datos);
      $upc=$fila2["upc"];
      $producto=$fila2["producto"];
      $categoria=$fila2["categoria"];
      $cantidad=$fila2["cantidad"];
      $preciomenor=$fila2["precioxmenor"];
      $preciomayor=$fila2["precioxmayor"];
    } else {
      header("Location: mensajes/error-eliminar.html");
    }
  }




?>
