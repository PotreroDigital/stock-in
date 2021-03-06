<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stock-In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo-general/style2.css">
    <link rel="shortcut icon" href="img/favicon/favicon.png">
  </head>
  <body class="body-tamaño">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <header>
      <div class="container-img">
        <img class="logo-img" src="img/logo/logo-stock-in.png" alt="">
      </div>
      <nav class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link disabled" href="agregar.php">Inicio</a>
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



    <!--<div class="container">
      <div class="row">
        <div class="col-md-5 col-lg-3 col-sm-9"><a class="btn btn-primary" href="agregar.php">Agregar</a></div>
        <div class="col-md-5 col-lg-3 col-sm-9"><a class="btn btn-primary" href="eliminar.php">Eliminar</a></div>
        <div class="col-md-5 col-lg-3 col-sm-9"><a class="btn btn-primary" href="modificar.php">Modificar</a></div>
        <div class="col-md-5 col-lg-3  col-sm-9">
          <form class="" action="buscar.php" method="post">
          <input type="text" name="upc" value="">
          <input class="btn btn-default" type="submit" name="" value="buscar">
          </form>
        </div>
      </div>
    </div>-->

    </header>

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
         $consulta="SELECT*FROM productos";
         mysqli_select_db($conexion,"stock_in");
         $datos= mysqli_query($conexion, $consulta);
         while ($fila2=mysqli_fetch_array($datos)) {
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
         }
         ?>
      </tr>
    </table>

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
