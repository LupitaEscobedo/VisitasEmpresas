<?php
$nom_alumnno="Jair Ernesto González Bonastre"
 ?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Itver</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Permite que el sitio sea responsive -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/header.css">
   </head>
   <body>
      <header>
         <?php include('header.php') ?>
      </header>
      <img class="logo" src="img/itver.png" alt="">
      <!-- Inicia el contenido -->
      <div class="content">
         <!--Se usa container para que esté centrado el contenido y mejor agrupado-->
         <div class="container">
            <!--Texto bienvenida-->
            <p class="text-center welcome-text pt-3 mb-0 font-italic">¡Bienvenido!</p>
            <div class="bienvenida-text">
              <i class="fa fa-user" aria-hidden="true"></i><span id="nombre_alumno" class="font-weight-bold font-italic text-muted"><?php echo $nom_alumnno ?></span>
            </div>
         </div>
      </div>
      <!--Inicio de las cartas se usa el sistema grid, 6x6 = 12-->
      <div class="cards pt-3">
         <div class="container">
            <div class="row">
               <div class="" align="center" style="border:1px solid blue; border-radius: 15px; margin: 15px;">
                  <div class="card" style="width: 20rem; border-radius: 15px;">
                    <figure class="figure"> <!-- Imagen de perfil -->
                      <img src="img/busitver.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." style="border-radius: 15px;">
                    </figure> <!-- Termina imagen de perfil -->
                     <div class="card-block">

                      <h4 class="card-title text-muted"><img class="fa" src="img/bus.png">Visto bueno de visitas</h4>

                     </div>
                     <!--Tabla izquierda-->
                     
                      <div class="col-sm-9">  <!-- Columna para la informacion del alumno/docente -->
          <div id="accordion" role="tablist" aria-multiselectable="true"> <!-- Collapse Accordion - Area de informacion -->
            <div class="card">  <!-- Tarjeta con la informacion personal -->
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">  <!-- Titulo de la tarjeta -->
              <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0"> Sistemas </h5>
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
                  <h5 class="mb-0">Industrial</h5>
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
                  <h5 class="mb-0">Mecánica - Mecatrónica</h5>
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
            <div class="card">  <!-- Tarjeta con la informacion academica -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">Química - Bioquímica</h5>
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
            <div class="card">  <!-- Tarjeta con la informacion academica -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">Ciencias Básicas</h5>
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
                  <h5 class="mb-0">Económico - Administrativo</h5>
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
            <div class="card">  <!-- Tarjeta con la informacion de contactos de emergencia -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">Eléctrica - Electrónica</h5>
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
                      
                  </div>
               </div>
               <!--Parte derecha-->
               <div class="" align="center" style="border:1px solid blue; border-radius: 15px; margin: 15px;">
                  <div class="card" style="width: 20rem; border-radius: 15px;">
                    <figure class="figure"> <!-- Imagen de perfil -->
                      <img src="img/calendario.jpg" class="figure-img img-fluid rounded" alt="calendario" style="border-radius: 15px;">
                    </figure> <!-- Termina imagen de perfil -->
                     <div class="card-block">


                        <h4 class="card-title text-muted"><img class="fa" src="img/calendar.png">Fechas Confirmadas</h4>

                     </div>
                     <!--Tabla central-->
                     <table class="table-striped">
                        <tbody>
                           <tr>
                              <td class="table-hard-blue text-white"><p>06 oct 2017 <br> 9:30 hrs.</p></td>
                              <td><p class="emp"><span class="t-bold">iLab</span> <br> Xalapa</p></td>
                           </tr>
                           <tr>
                              <td class="table-low-blue text-white"><p>13 oct 2017 <br> 10:00 hrs.</p></td>
                              <td><p class="emp"><span class="t-bold">Telmex Biblioteca Digital</span> <br> Nuevo Veracruz</p></td>
                           </tr>
                           <tr>
                              <td class="table-hard-blue text-white"><p>14 oct 2017 <br> 8:00 hrs.</p></td>
                              <td><p class="emp"><span class="t-bold">CFE Laguna Verde</span> <br> Alto Lucero</p></td>
                           </tr>
                           <tr>
                             <td class="table-low-blue text-white"><p>16 oct 2017 <br> 8:00 hrs.</p></td>
                             <td><p class="emp"><span class="t-bold">Tenaris Tamsa</span> <br> Cuidad Industrial</p></td>
                           </tr>
                           <tr>
                             <td class="table-hard-blue text-white"><p>20 oct 2017 <br> 9:00 hrs.</p></td>
                             <td><p class="emp"><span class="t-bold">Volkswagen México</span> <br> Puebla</p></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>

               <!-- Parte derecha -->
               <div class="" align="center" style="border:1px solid blue; border-radius: 15px; margin: 15px;">
                  <div class="card" style="width: 20rem; border-radius: 15px;">
                    <figure class="figure"> <!-- Imagen de perfil -->
                      <img src="img/Empresas.jpg" class="figure-img img-fluid rounded" alt="calendario" style="border-radius: 15px;">
                    </figure> <!-- Termina imagen de perfil -->
                     <div class="card-block">


                        <h4 class="card-title text-muted"><img class="fa" src="img/empresa.png">Empresas</h4>

                     </div>
                     <!--Tabla derecha-->
                     <table class="table-striped">
                        <tbody>
                           <tr>
                              <td><p class="emp"><span class="t-bold">iLab</span> <br> Xalapa</p></td>
                           </tr>
                           <tr>
                              <td><p class="emp"><span class="t-bold">Telmex Biblioteca Digital</span> <br> Nuevo Veracruz</p></td>
                           </tr>
                           <tr>
                              <td><p class="emp"><span class="t-bold">CFE Laguna Verde</span> <br> Alto Lucero</p></td>
                           </tr>
                           <tr>
                             <td><p class="emp"><span class="t-bold">Tenaris Tamsa</span> <br> Cuidad Industrial</p></td>
                           </tr>
                           <tr>
                             <td><p class="emp"><span class="t-bold">Volkswagen México</span> <br> Puebla</p></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
