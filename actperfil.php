<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Itver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!-- Permite que el sitio sea responsive -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Iconos libres desde la web fontawesome.io (Opcional) -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/actperfil.css">
    <link rel="stylesheet" href="css/header.css">
  </head>
  <body>
    <header>
      <?php include('header.php') ?>
    </header>
    <img class="logo" src="img/itver.png" alt="">
    <div class="content"> <!-- Empieza el contenido de la pagina -->
      <div class="row leftbar"> <!-- Sistema Grid bootstrap -->
        <div class="col-sm-3"> <!-- Columna para la tarjeta de perfil -->
          <div class="card">  <!-- Tarjeta de perfil -->
            <div class="card-header" role="tab" id="headingProfile"> <!-- Titulo de la tarjeta -->
              <h5 class="mb-0">
                Perfil de Alumno
              </h5>
            </div> <!-- Termina titulo de la tarjeta -->
            <figure class="figure"> <!-- Imagen de perfil -->
              <img src="img/profile/test.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            </figure> <!-- Termina imagen de perfil -->
            <div class="card-block">  <!-- Bloque de perfil con el nombre y carrera del alumno/docente -->
              <h4 class="card-title">Jair Ernesto González Bonastre</h4>
              <p class="card-text"><img class="graded" src="img/graded.png">Ingeniería En Sistemas Computacionales</p>
            </div>  <!-- Termina bloque de perfil -->
          </div>  <!-- Termina tarjeta de perfil -->
        </div>  <!-- Termina columna para el perfil -->
        <div class="col-sm-9">  <!-- Columna para la informacion del alumno/docente -->
          <div id="accordion" role="tablist" aria-multiselectable="true">   <!-- Collapse Accordion - Area de informacion -->
            <div class="card">  <!-- Tarjeta con la informacion personal -->
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                      <img class="ico" src="img/profile.png">Información Personal
                  </h5>
                </div>
              </a> <!-- Termina titulo de la tarjeta -->
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block">  <!-- Contenido de la tarjeta -->
                  <form class="c-inf" action="index.html" method="post" id="contact-info">  <!-- Formulario -->
                    <div class="row border">  <!-- Sistema Grid -->
                      <div class="col"> <!--Columna con el input para el email -->
                        <div class="basic">
                          <input type="text" class="form-control" name="email" placeholder="Correo electrónico">
                        </div>
                      </div> <!-- Termina la columna del input -->
                      <div class="col"> <!-- Columna con el input para el telefono -->
                        <div class="contact">
                          <input type="text" class="form-control" name="tel" placeholder="Teléfono">
                        </div>
                      </div>  <!-- Termina columna con el input -->
                    </div>  <!-- Termina el Grid -->
                    <button type="button" class="btn btn-primary btn-sm fondo" name="save">Guardar</button>
                  </form> <!-- Termina el formulario -->
                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tarjeta con la informacion personal -->
            <div class="card">  <!-- Tarjeta con la informacion de contacto -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                      <img class="ico" src="img/graded-white.png">Contactos de Emergencia
                  </h5>
                </div>
              </a>  <!-- Termina titulo de la tarjeta -->
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-block">  <!--Contenido de la tarjeta -->
                  <form class="c-emerg" action="index.html" method="post" id="emg-info">  <!-- Formulario -->
                    <div class="row border">  <!-- Sistema Grid -->
                      <div class="col"> <!--Quitar el sistema Grid -->
                        <label for="nom1">Contacto 1</label>
                        <input type="text" class="form-control marg" name="nom1" placeholder="Nombre Completo">
                        <input type="text" class="form-control" name="tel1" placeholder="Teléfono de Emergencia">
                        <br><label for="nom2">Contacto 2</label>
                        <input type="text" class="form-control marg" name="nom2" placeholder="Nombre Completo">
                        <input type="text" class="form-control" name="tel2" placeholder="Teléfono de Emergencia">
                      </div>
                    </div>  <!-- Termina Sistema Grid -->
                    <button type="button" class="btn btn-primary btn-sm fondo" name="button">Guardar</button>
                  </form> <!-- Termina Formulario -->
                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tarjeta con la informacion de contacto -->
            <div class="card">  <!-- Tarjeta con el formulario para subir fotografia -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">  <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                      <img class="ico" src="img/camera.png">Fotografía
                  </h5>
                </div>
              </a>  <!-- Termina titulo de la tarjeta -->
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-block">  <!-- Contenido de la tarjeta -->
                  <form class="upphoto" action="index.html" method="post" id="photo-info">  <!-- Formulario -->
                    <div class="row border">  <!-- Sistema Grid -->
                      <div class="col-3 act-img-col elements-form"> <!-- Columna para imagen actual -->
                        <label>Fotografía Actual</label> <br>
                        <figure class="figure"> <!-- Imagen de perfil -->
                          <img src="img/profile/test.jpg" class="act-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure> <!-- Termina imagen de perfil -->
                      </div> <!-- Termina columna imagen actual -->
                      <div class="col-9 elements-form">   <!-- Columna elementos del form -->
                        <label for="file">Nueva Fotografía</label>
          							<input type="file" id="input08"> <!-- Input con el plugin FileStyle con id utilizado en el script declarado al final del doc -->
                        <label>
          								<button id="clear" class="btn btn-primary lblph btn-sm" type="button">  <!-- Boton con el plugin FileStyle con id utilizado en el script declarado al final del doc -->
          									Eliminar Fotografía
          								</button>
          							</label>
                      </div>  <!-- Termina columna elementos del form -->
                    </div>  <!-- Termina Sistema Grid -->
                    <button type="button" class="btn btn-primary btn-sm fondo" name="button">Guardar</button>
                  </form> <!-- Termina Formulario -->

                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tajeta con el formulario de la fotografia -->
            <div class="card">  <!-- Tarjeta con el formulario para cambiar el NIP/contraseña -->
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> <!-- Titulo de la tarjeta -->
                <div class="card-header" role="tab" id="headingFour">
                  <h5 class="mb-0">
                      <img class="ico" src="img/key.png">NIP
                  </h5>
                </div>
              </a>  <!-- Termina titulo de la tarjeta -->
              <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="card-block">  <!-- Contenido de la tarjeta -->
                  <form class="nip" action="index.html" method="post" id="NIP-info">  <!-- Formulario -->
                    <div class="row border">  <!-- Sistema Grid -->
                      <div class="col ali-right"> <!--Quitar el sistema Grid -->
                        <h6>NIP Actual</h6><br>
                        <label for="nNIP" class="t-nip">Nuevo NIP</label>
                        <br><label for="cNIP">Confirmar NIP</label>
                      </div>
                      <div class="col ali-left">
                        <p class="nipact">1234</p>
                        <input type="text" class="marg" name="nNip">
                        <input type="text" class="marg" name="cNIP">
                      </div>
                    </div>  <!-- Termina Sistema Grid -->
                    <button type="button" class="btn btn-primary btn-sm fondo" name="button">Guardar</button>
                  </form> <!-- Termina Formulario -->
                </div>  <!-- Termina contenido de la tarjeta -->
              </div>
            </div>  <!-- Termina tarjeta con el formulario del NIP/contraseña -->
          </div>  <!-- Termina el area de informacion -->
        </div>  <!-- Termina columna con la informacion del alumno/docente -->
      </div> <!-- Termina Grid bootstrap -->
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>   <!-- Plugin para el estilo del elemento input file -->
    <script type="text/javascript">
      $('#input08').filestyle({   //Aplica los estilos al elemento con el id seleccionado
  				text : 'Cargar Fotografía',
  				btnClass : 'btn-primary',
          placeholder: "No hay elementos seleccionados"
  			});
      $('#clear').click(function() {  //Limpia el input file seleccionado
  			$('#input08').filestyle('clear');
  		});
    </script>
  </body>
</html>
