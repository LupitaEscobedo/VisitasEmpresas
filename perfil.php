<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Itver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!-- Permite que el sitio sea responsive -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Iconos libres desde la web fontawesome.io (Opcional) -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/header.css">
  </head>
  <body>
    <header>
      <?php include('header.php') ?>
    </header>
    <img class="logo" src="img/itver.png" alt="">
    <div class="content"> <!-- Empieza el contenido de la pagina -->
      <div class="row leftbar"> <!-- Sistema Grid bootstrap -->
        <div class="col-sm-3">  <!-- Columna para la tarjeta de perfil -->
          <div class="card">  <!-- Tarjeta de perfil -->
            <div class="card-header" role="tab" id="headingProfile">   <!-- Titulo de la tarjeta -->
              <h5 class="mb-0">
                  Perfil de Alumno
              </h5>
            </div>  <!-- Termina titulo de la tarjeta -->
            <figure class="figure"> <!-- Imagen de perfil -->
              <img src="img/profile/test.jpg" class="figure-img img-fluid rounded" alt="Foto">
            </figure> <!-- Termina imagen de perfil -->

            <div class="card-block">  <!-- Bloque de perfil con el nombre y carrera del alumno/docente -->
              <h4 class="card-title">Jair Ernesto González Bonastre</h4>
              <p class="card-text"><img class="graded" src="img/graded.png">Ingeniería En Sistemas Computacionales</p>
            </div>  <!-- Termina bloque de perfil -->
            <div class="card-block">  <!-- Bloque para el boton que redirige a actperfil.php -->
              <button type="button" class="btn btn-primary btn-sm" name="Update" onClick="window.location.href='actperfil.php'">Actualizar Información</button>
            </div>  <!-- Termina bloque para el boton de actualizar -->
          </div>  <!-- Termina tarjeta de perfil -->
        </div>  <!-- Termina columna para el perfil -->
        <div class="col-sm-9">  <!-- Columna para la informacion del alumno/docente -->
          <div id="accordion" role="tablist" aria-multiselectable="true"> <!-- Collapse Accordion - Area de informacion -->
            <div class="card">  <!-- Tarjeta con la informacion personal -->
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">  <!-- Titulo de la tarjeta -->
              <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <img class="ico" src="img/profile.png">Información Personal
                </h5>
              </div>
              </a>  <!-- Termina titulo de la tarjeta -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block">  <!-- Contenido de la tarjeta -->
                  <div class="row"> <!-- Sistema Grid -->
                    <div class="col"> <!--Columna con la informacion del alumno/docente -->
                      <p class="align"><span class="bold">Fecha de Nacimiento: </span>15/May/1996</p>
                      <p class="align"><span class="bold">Edad: </span>21</p>
                      <p class="align"><span class="bold">Sexo: </span>Masculino</p>
                    </div>  <!-- Termina columna con la informacion -->
                    <div class="col"> <!-- Columna con la informacion de contacto del alumno/docente -->
                      <p class="align"><i class="fa fa-envelope" aria-hidden="true"></i>jairgonzalez60@gmail.com</p><br>
                      <p class="align"><i class="fa fa-phone" aria-hidden="true"></i>2299300104</p>
                    </div>  <!-- Termina columna con la informacion de contacto -->
                  </div>  <!-- Termina sistema Grid -->
                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tarjeta con la informacion personal -->
            <div class="card">  <!-- Tarjeta con la informacion academica -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                      <img class="ico" src="img/graded-white.png">Información Académica
                  </h5>
                </div>
              </a>  <!-- Termina titulo de la tarjeta -->
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-block">  <!-- Contenido de la tarjeta -->
                  <p class="align"><span class="bold">Ingeniería/Licenciatura:</span> Ingeniería en Sistemas Computacionales</p>
                  <p class="align"><span class="bold">Semestre:</span> 7</p>
                  <p class="align"><span class="bold">No. De Control:</span> E14021231</p>
                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tarjeta con la informacion academica -->
            <div class="card">  <!-- Tarjeta con la informacion de contactos de emergencia -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                      <img class="ico" src="img/phone.png">Contactos de Emergencia
                  </h5>
                </div>
              </a>  <!-- Termina titulo de la tarjeta -->
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-block">  <!-- Contenido de la tarjeta -->
                  <p class="align"><i class="fa fa-comments-o" aria-hidden="true"></i>Contacto 1</p>
                  <p class="align space"><i class="fa fa-phone" aria-hidden="true"></i>555-333-222</p>
                  <p class="align"><i class="fa fa-comments-o" aria-hidden="true"></i>Contacto 2</p>
                  <p class="align space"><i class="fa fa-phone" aria-hidden="true"></i>555-333-222</p>
                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tarjeta con la informacion de contactos de emergencia -->
          </div>  <!-- Termina area de informacion -->

        </div> <!-- Termina columna con la informacion del alumno/docente -->
      </div>  <!-- Termina sistema Grid -->
    </div>  <!-- Termina contenido de la pagina -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
