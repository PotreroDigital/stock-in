<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stock-In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo-general/style2.css">
    <link rel="shortcut icon" href="img/favicon/favicon.png">
  </head>
  <body>
    <header>
      <div class="container-img">
        <img class="logo-img" src="img/logo/logo-stock-in.png" alt="">
      </div>
      <nav class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agregar.php">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eliminar.php">Eliminar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modificar.php">Modificar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#"></a>
          </li>
        </ul>
        <form class="form-inline" action="buscar.php" method="post">
          <input class="form-control mr-sm-2" type="text" name="upc" placeholder="Buscar">
          <button class="btn btn-success" type="submit"><img src="img/iconos-general/buscar.png" alt="" width="20px" height="20px"></button>
        </form>
      </nav>
    </header>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php
    /*$upc1=$_POST['upc1'];
    include("funciones/conexion.php");
    mysqli_select_db($conexion, "stock_in");
    $consulta="SELECT*FROM productos WHERE upc=$upc1";
    $datos= mysqli_query($conexion, $consulta);
    $fila2=mysqli_fetch_array($datos);
    $upc=$fila2["upc"];
    $producto=$fila2["producto"];
    $categoria=$fila2["categoria"];
    $cantidad=$fila2["cantidad"];
    $preciomenor=$fila2["precioxmenor"];
    $preciomayor=$fila2["precioxmayor"];*/
    include("funciones/conexion.php");
    include("funciones/eliminar2.php")
    ?>

    <br>
    <h3>¿Estas seguro que deseas eliminar el siguiente producto?</h3>
    <br>

    <table class="table table-striped">
      <tr>
        <th>UPC</th>
        <th>IMAGEN</th>
        <th>PRODUCTO</th>
        <th>CATEGORIA</th>
        <th>CANTIDAD</th>
        <th>PRECIO POR UNIDAD</th>
        <th>PRECIO POR CANTIDAD</th>
      </tr>
         <?php
         include("funciones/conexion.php");
         mysqli_select_db($conexion,"stock_in");
         if ($q= "SELECT*FROM productos WHERE upc=$upc") {
           $reg=mysqli_query($conexion, $q);
           $fila2=mysqli_fetch_array($reg);
           if ($fila2['upc']==$upc) {
             while ($fila2) {
             echo "<tr>";
             echo "<td>";
             echo $fila2 ["upc"];
             echo "</td>";
             echo "<td>";
             ?>
             <img src="data:image/jpg;base64, <?php echo base64_encode($fila2['imagen'])?>" alt="" width="100px" height="100px">
             <?php
             echo "</td>";
             echo "<td>";
             echo $fila2 ["producto"];
             echo "</td>";
             echo "<td>";
             echo $fila2 ["categoria"];
             echo "</td>";
             echo "<td>";
             echo $fila2 ["cantidad"];
             echo "</td>";
             echo "<td>";
             echo $fila2 ["precioxmenor"];
             echo "</td>";
             echo "<td>";
             echo $fila2 ["precioxmayor"];
             echo "</td>";
             break;
             }
           }else {
             echo "<br><h3>no se pudo encontrar el producto</h3><br>";
             }
         };
         ?>
      </tr>
    </table>


    <form class="" action="funciones/baja-producto.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="form-group">
              <div class="input-group">
                <input class="d-none" type="text" name="upc" value="<?php echo "$upc"; ?>" required class="form-control" placeholder="UPC">
                <span class="input-group-addon d-none">-</span>
                <input class="d-none" type="text" name="prod" value="<?php echo "$producto"; ?>" required class="form-control" placeholder="Producto">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="form-group">
              <div class="input-group">
                <input class="d-none" type="text" name="categ" value="<?php echo "$categoria"; ?>" required class="form-control" placeholder="categoria">
                <span class="input-group-addon d-none">-</span>
                <input class="d-none" type="number" name="cant" value="<?php echo "$cantidad"; ?>" required class="form-control" placeholder="cantidad">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="form-group">
              <div class="input-group">
                <input class="d-none" type="number" name="preciomenor" value="<?php echo "$preciomenor"; ?>" required class="form-control" placeholder="precio por menor  ">
                <span class="input-group-addon d-none">-</span>
                <input class="d-none" type="number" name="preciomayor" value="<?php echo "$preciomayor"; ?>" required class="form-control" placeholder="precio por mayor">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="form-group">
              <div class="input-group">
              <button class="btn btn-default col-xs-12 col-md-12" type="submit" name="button"><img src="img/iconos-general/basura.png" alt="" width="20px" height="20px">&nbsp Eliminar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <a class="btn btn-" href="index.php"><img src="img/iconos-general/espalda.png" alt="" width="20px" height="20px">&nbsp Regresar</a>
    <br><br>



    <div class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between"></div>

    <footer class="card-footer ">
      <div class="row">
        <div class="col-lg-12">
          <h3>Seguime en mis redes sociales!!</h3>
        </div>
      </div>
      <a href="https://www.facebook.com/profile.php?id=100012664488243" target="_blank"><img class="icon-fb" src="img/iconos-redes/facebook.png" alt="" width="50px" height="50px"></a>
      <a href="https://www.linkedin.com/in/gabriel-pelizza-924823192/" target="_blank"><img class="icon-in" src="img/iconos-redes/linkedin.png" alt="" width="50px" height="50px"></a>
      <a href="https://www.instagram.com/gabriel.pelizza/" target="_blank"><img class="icon-ig" src="img/iconos-redes/instagram.png" alt="" width="50px" height="50px"></a>
      <div>Creado por: Gabriel Pelizza</div>
    </footer>
  </body>
</html>
