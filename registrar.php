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
     echo "insert exitoso";
   }
   else{
     echo "no se pudo";
   }
 ?>
