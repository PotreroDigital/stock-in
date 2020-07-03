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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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
          <li class="nav-item  active">
            <a class="nav-link disabled" href="eliminar.php">Eliminar</a>
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
    <?php
    include("funciones/conexion.php");
    ?>
    <br>

    <h3>Eliminar Producto </h3><br>
    <div class="separador-medio"></div>

    <form class="" action="eliminar-control.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="form-group">
              <div class="input-group">
                <input type="text" name="upc1" value="" required class="form-control" placeholder="UPC">
                <span class="input-group-addon">-</span>
                <input type="submit" name="" value="Eliminar">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <a class="btn btn-" href="index.php"><img src="img/iconos-general/espalda.png" alt="" width="20px" height="20px">&nbsp Regresar</a>

    <div class="separador"></div>
    <div class="separador"></div>

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
