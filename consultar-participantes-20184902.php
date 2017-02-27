<!DOCTYPE html>
<html>
  <?php  require  "head.php" ?>
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
          <div class="card">
            <div class="card-content texto-azul">
              <span class="card-title">Participantes del evento</span>
              <table class="responsive-table highlight">
              <thead>
                <tr>
                    <th data-field="id">Nombre</th>
                    <th data-field="name">Correo</th>
                    <th data-field="price">Teléfono</th>
                    <th data-field="price">Edad</th>
                    <th data-field="price">Tipo</th>
                    <th data-field="price">Institución</th>
                    <th data-field="price">Empresa</th>
                    <th data-field="price">Evento</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include "conexion.php";

                  $query = "SELECT * FROM Asistente";
                  $resultado = $connect->query($query);

                  while ($row=$resultado->fetch_assoc()) {
                    ?>

                    <tr>
                      <td><?php echo $row['Nombre']; ?></td>
                      <td><?php echo $row['Correo']; ?></td>
                      <td><?php echo $row['Telefono']; ?></td>
                      <td><?php echo $row['Edad']; ?></td>
                      <td><?php echo $row['Tipo']; ?></td>
                      <td><?php echo $row['Institucion']; ?></td>
                      <td><?php echo $row['Empresa']; ?></td>
                      <td><?php echo $row['Evento']; ?></td>
                    </tr>

                    <?php
                  }
                  ?>


                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                  <td>$0.87</td>
                  <td>$0.87</td>
                  <td>$0.87</td>
                  <td>$0.87</td>
                  <td>$0.87</td>
                  <td>$0.87</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  require "footer.php" ?>
  </body>
</html>
