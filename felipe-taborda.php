<!DOCTYPE html>
  <html>
    <?php
      require("head.php");
     ?>

    <body>
      <nav role="navigation" class="gris">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo  texto-amarillo"><img src="img\logo2.png" style="padding-top:1rem; width:135px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#felipe">Felipe</a></li>
        <li><a href="#conferencia">Conferencia</a></li>
        <li><a href="#taller">Taller</a></li>
        <li><a href="#registro">Registro</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
        <li><a href="#felipe">Felipe</a></li>
        <li><a href="#conferencia">Conferencia</a></li>
        <li><a href="#taller">Taller</a></li>
        <li><a href="#registro">Registro</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse  texto-amarillo"><i class="material-icons">menu</i></a>
    </div>
  </nav>
      <!-- INICIO DE HEADER -->
  <!-- FIN DE HEADER -->

  <!-- INICIO DE SLIDER -->

      <!-- Carrusel deshabilitado temporalmente <div class="carousel carousel-slider center" data-indicators="true">
  <div class="carousel-fixed-item center">
    <a class="btn waves-effect white light-green darken-2">¡Regístrate!</a>
  </div>
  <div class="carousel-item blue white-text carrusel" href="#one!" style="background:url('img\BANNER.jpg'); background-size:cover;background-position:cover,cover;">
    <h2>Felipe en Aguascaientes</h2>
    <p class="white-text">Diseñador brasileño</p>
  </div>
  <div class="carousel-item blue white-text" href="#two!">
    <h2>Talleres de diseño</h2>
    <p class="white-text">Cupo limitado a 100 personas</p>
  </div>
  <div class="carousel-item white-text" href="#three!" style="background:url('img/BANNER.jpg');">
    <h2>Conferencia</h2>
    <p class="white-text">Uno de los más grandes exponentes del diseño en tú ciudad.</p>
  </div>
</div> -->
<div class="hero" style="min-height:500px; background:rgba(0,0,0,0.5) url('img/BANNER.jpg'); background-size:cover;background-position:50%;">
  <div class="contenedor">
    <div class="row">
      <div class="col s12 texto-blanco left-align">
        <h4 class="texto-amarillo titulo">Taborda en<br> Aguascalientes</h4>
        <p class="subtitulo">¡Reserva ya tu lugar! No te pierdas la conferencia y taller<br> en Museo Descubre con uno de los diseñadores internacionales del momento.</p>
      </div>
      <div class="col s12 center-align" style="padding:2rem 0;">
        <a class="btn waves-effect waves-light verde" href="#registro">Regístrate
          <i class="material-icons right">send</i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- FIN DE SLIDER -->

<!-- INICIO DE CONTENIDO -->
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3 class="texto-verde">Felipe Taborta en Aguascalientes</h3>
      </div>
    </div>
  </div>
  <div class="container" id="#felipe">
    <div class="row">
      <div class="col s12">
        <h3 class="texto-verde">Acerca de Felipe</h3>
      </div>
      <div class="col s12">
            <div class="card horizontal hoverable">
              <div class="card-image">
                <img src="img\felipe.png" style="width:250px;">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p>FELIPE TABORDA Es un diseñador gráfico desde Rio de Janeiro, Brasil. Formado por la PUC / RJ, estudió cine y fotografía en
                     la London International Film School (Inglaterra), Communication Arts en el New York Institute of Technology y
                     Graphic Design en la School of Visual Arts (EUA). Desde 1990 tiene su propio estudio, actuando principalmente en el
                     área cultural, editorial y fotográfica. En 2008 ha publicado su libro Latin American Graphic Design, por la editorial Taschen (Alemania). En 2014 la Universidad St Johns, de Nueva York, organizó la muestra individual Another Point of View, una extensa retrospectiva de sus 30 años de trabajos gráficos.</p>
                </div>
                <div class="card-action right-align">
                  <a href="#" class="texto-amarillo">Ver más</a>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3 class="texto-verde">Programa</h3>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <table class="responsive-table highlight">
              <thead>
                <tr>
                    <th data-field="id">Nombre</th>
                    <th data-field="ponente">Ponente</th>
                    <th data-field="categoria">Categoria</th>
                    <th data-field="hora">Hora</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Creación músical, solo el diseño salva</td>
                  <td>Felipe Taborta</td>
                  <td>Taller</td>
                  <td>Jueves, Viernes y Sábado de 10 a 2pm</td>
                </tr>
                <tr>
                  <td>Fusión de culturas Brasil - México</td>
                  <td>Colectivo Diaspora</td>
                  <td>Evento previo a conferencia</td>
                  <td>Plaza Célebre del Museo Descubre (5 a 7 pm)</td>
                </tr>
                <tr>
                  <td>¿De dónde vienen las ideas?</td>
                  <td>Felipe Taborta</td>
                  <td>Conferencia</td>
                  <td>7:00 pm - 9:00 pm</td>
                </tr>
              </tbody>
            </table>
      </div>
    </div>
  </div>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h3 class="header center texto-verde">Patrocinadores</h3>
        <div class="row center">
          <h5 class="header col s12 white-text">Conoce a los responsables de que este evento suceda</h5>
        </div>
        <div class="row">
          <div class="owl-carousel">
              <img src="img/patrocinadores/gob.png" class="img-owl"/>

              <img src="img/patrocinadores/descubre.png" class="img-owl"/>

              <img src="img/patrocinadores/diaspora.png" class="img-owl"/>

              <img src="img/patrocinadores/idscea.png" class="img-owl"/>

              <img src="img/patrocinadores/enterateags.png" class="img-owl"/>

              <img src="img/patrocinadores/voxradio.png" class="img-owl"/>

              <img src="img/patrocinadores/algomas.png" class="img-owl"/>

              <img src="img/patrocinadores/br.png" class="img-owl"/>

              <img src="img/patrocinadores/cer_1_fenix.png" class="img-owl"/>

              <img src="img/patrocinadores/ellington.png" class="img-owl"/>

              <img src="img/patrocinadores/epoca_bar.png" class="img-owl"/>

              <img src="img/patrocinadores/homero.png" class="img-owl"/>

              <img src="img/patrocinadores/mano.png" class="img-owl"/>

              <img src="img/patrocinadores/pxl.png" class="img-owl"/>

              <img src="img/patrocinadores/voces.png" class="img-owl"/>
          </div>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img\parallax.jpg" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 272px, 0px);"></div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col s3">
    </div>
    <div class="col s3">
    </div>
    <div class="col s3">
    </div>
    <div class="col s3">
    </div>
  </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3 class="texto-verde">Ubicación</h3>
        <p>Nos vemos el 16, 17 y 18 de marzo en las instalaciones del museo descubre.</p>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14812.105327331385!2d-102.2892594!3d21.85652!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef3f04e851830103!2sDescubre+Museo+Interactivo+de+Ciencia+y+Tecnolog%C3%ADa!5e0!3m2!1ses!2smx!4v1487887167083" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col s12">
        <div class="row">
        <ul class="tabs tabs-fixed-width">
        <li class="tab col s6"><a href="#"><i class="small material-icons">room</i> Museo Descubre, Aguascalientes.</a></li>
        <li class="tab col s6"><a href="#"><i class="small material-icons">schedule</i> 16, 17 y 18 de Marzo de 2017 </a></li>
      </ul>
    </div>
      </div>
    </div>
  </div>
  <div class="container" id="registro">
    <div class="row">
      <div class="col s12">
        <h3 class="texto-verde">¡Registrate!</h3>
      </div>
    </div>
    <div class="row">
      <ul id="tabs-swipe-demo" class="tabs">
    <li class="tab col s6"><a href="#taller">Registro</a></li>
  </ul>
  <div class="col s12">
    <form class="col s12" method="post" action="registrar.php" id="formulario">
      <div class="row">
        <p>Registro para taller agotado!</p>
        <p class="texto-verde">Registro para conferencia disponible!</p>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="nombre" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" name="telefono" type="tel" class="validate" minlength="10" maxlength="10">
          <label for="icon_telephone">Teléfono</label>
        </div>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">mail</i>
          <input id="" type="email"  name="correo" class="validate">
          <label for="icon_telephone">Correo Electrónico</label>
        </div>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">person_pin</i>
          <input id="" type="number" name="edad" class="validate" maxlength="2">
          <label for="icon_telephone">Edad</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">stars</i>
          <select name="tipoasistente" class="validate" id="tipoAsistente">
            <option value="" disabled selected>Selecciona tu perfil</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Profesionista">Profesionista</option>
          </select>
          <label for="icon_telephone">Perfil</label>
        </div>
        <div class="input-field col s12 estudiante">
          <i class="material-icons prefix">mode_edit</i>
          <input id="institucion" type="text" name="institucion" class="validate">
          <label for="icon_telephone">Institución</label>
        </div>
        <div class="input-field col s12 profesionista">
          <i class="material-icons prefix">work</i>
          <input id="empresa" type="text" name="empresa" class="validate">
          <label for="icon_telephone">Empresa</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">turned_in</i>
          <select name="evento" class="validate">
            <option value="" disabled selected>Participación</option>
            <option value="Conferencia">Conferencia</option>
          </select>
          <label for="icon_telephone">Evento</label>
        </div>
      </div>
      <div class="row right-align">
        <div class="col s12">
          <button class="btn waves-effect waves-light verde" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
    </div>
  </div>
<!-- FIN DE CONTENIDO -->




<?php
require 'footer.php';
 ?>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script>
      $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
          autoplay:true,
          responsive:{
            0:{
              items:1,
              nav:true,
              loop:true
            },
            480:{
              items:2,
              loop:true,
              nav:true

            },
            768:{
              items:3,
              loop:true
            },
            1024:{
              items:4,
              loop:true,
              nav:true
            }
          }
        });
        $(".button-collapse").sideNav();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $('.parallax').parallax();
        $('select').material_select();
        $(".estudiante, .profesionista").fadeOut();
        $("#formulario").change(function(){
          var $selection = $( "#tipoAsistente option:selected" ).text();
          if ($selection == "Estudiante") {
            $(".estudiante").fadeIn();
            $(".profesionista").fadeOut();

          }
          else if ($selection == "Profesionista") {
            $(".profesionista").fadeIn();
            $(".estudiante").fadeOut();
          }
          else{
            $(".estudiante, .profesionista").fadeOut();
          }
        })
      })
      </script>
    </body>
  </html>
