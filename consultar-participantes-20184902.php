<!DOCTYPE html>
<html>
  <?php  require  "head.php" ?>
  <body>
    <nav role="navigation" class="gris">
    <div class="nav-wrapper container">
      <a id="logo-container" href="felipe-taborda.php" class="brand-logo  texto-amarillo"><img src="img\logo2.png" style="padding-top:1rem; width:135px;"></a>
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
              <table class="responsive-table highlight" id="tabla">
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
              </tbody>
            </table>
            </div>
            <div class="card-action right-align texto-azul">
              <a href="#" id="descargar"><i class="small material-icons">swap_vert</i>Descargar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  require "footer.php" ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/table2excel.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#descargar").on("click", function(){
        $("#tabla").table2excel({
          name: "Participantes",
          filename: "Participantes",
          fileext: "xlsx"
        });
      });
    });
    </script>
  </body>
</html>
