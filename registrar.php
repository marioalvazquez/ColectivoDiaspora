<!DOCTYPE html>
<html>
<?php require 'head.php' ?>
<body>
  <nav role="navigation" class="gris">
<div class="nav-wrapper container">
  <a id="logo-container" href="#" class="brand-logo  texto-amarillo"><img src="img\logo2.png" style="padding-top:1rem; width:135px;"></a>
  <ul class="right hide-on-med-and-down">
    <li><a href="felipe-taborda.php">Felipe</a></li>
    <li><a href="felipe-taborda.php">Conferencia</a></li>
    <li><a href="felipe-taborda.php">Taller</a></li>
    <li><a href="felipe-taborda.php">Registro</a></li>
  </ul>

  <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
    <li><a href="felipe-taborda.php">Felipe</a></li>
    <li><a href="felipe-taborda.php">Conferencia</a></li>
    <li><a href="felipe-taborda.php">Taller</a></li>
    <li><a href="felipe-taborda.php">Registro</a></li>
  </ul>
  <a href="#" data-activates="nav-mobile" class="button-collapse  texto-amarillo"><i class="material-icons">menu</i></a>
</div>
</nav>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Registro</span>
              <?php
                include("conexion.php");

                $nombre = $_POST['nombre'];
                $telefono = $_POST['telefono'];
                $edad = $_POST['edad'];
                $correo = $_POST['correo'];
                $tipo = $_POST['tipoasistente'];
                $institucion = $_POST['institucion'];
                $empresa = $_POST['empresa'];
                $evento = $_POST['evento'];

                $query = "INSERT INTO Asistente(Nombre, Correo, Telefono, Edad, Tipo, Institucion, Empresa, Evento) VALUES('$nombre','$correo',$telefono,$edad,'$tipo','$institucion','$empresa','$evento')";

                $resultado = $connect->query($query);

                 if ($resultado) {
                   echo "<p><i class='large material-icons'>done_all</i> Felicidades! Estás dentro, te esperamos el día del evento.</p>";
                 }
                 else{
                   echo "<p><i class='large material-icons'>warning</i> Ups! Algo salió mal, vuelve a intentarlo más tarde.</p>";
                 }
               ?>
            </div>
            <div class="card-action">
              <a href="/felipe-taborda.php">Regresar</a>
            </div>
          </div>
      </div>
    </div>
  </div>
 <?php  require 'footer.php' ?>
 </body>
</html>
