
  <div class="header" id="header">  <!-- Comienza el header -->
    <div class="title"> <!-- Encabezado -->
      <div class="imgsep">  <!-- Logos izquierdos de la SEP y TECNM -->
        <img class="sep" src="img/menu/sep.jpg" alt="SEP">
        <img class="tecnm" src="img/menu/tecnm.png" alt="TECNM">
      </div>  <!-- Terminan logos izquierdos -->
      <div class="inf"> <!-- Area con el texto -->
        <h2 class="titulo1">Sistema de Visitas a Empresas</h2>
        <h2 class="titulo2">Instituto Tecnológico de Veracruz</h2>
        <h2 class="titulo3">Portal Administrativo</h2>
      </div>  <!-- Termina area con texto -->
      <div class="imgsep">  <!-- Logo derecho ITVER -->
        <img class="itver" src="img/menu/itver.png" alt="TECNM">
      </div>  <!-- Termina logo derecho -->
    </div>  <!-- Termina encabezado -->

  <nav class="navbar navbar-toggleable-md navbar-light bg-faded"> <!-- Navbar con bootstrap -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--<a class="navbar-brand" href="#">Navbar</a> **OPCIONAL TITULO DE WEB**-->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <!-- Inicio -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>

        <!-- Visitas a Empresas -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navVistias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visitas a Empresas</a>
          <div class="dropdown-menu" aria-labelledby="navVisitas">
            <a class="dropdown-item" href="visitas.php">Catalogo de Empresas</a>
            <a class="dropdown-item" href="visitasProgramadas.php">Solicitudes</a>
          </div>
        </li>
        <!-- Formatos -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="formatovisitas.php" id="navFormato">
            Formatos          
          </a>
          <div class="dropdown-menu" aria-labelledby="navFormato">
            <a class="dropdown-item" href="formatovisitas.php">Solicitud de Visitas</a>
          </div>
        <!-- Reportes -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="formatos.php" id="navFormato">
            Reportes          
          </a>
          <div class="dropdown-menu" aria-labelledby="navFormato">
            <a class="dropdown-item" href="formatovisitas.php">Lista de visitas</a>
          </div>

        <!-- Perfil -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="perfil.php" id="navPerfil">
            Perfil
          </a>
          <div class="dropdown-menu" aria-labelledby="navPerfil">
            <a class="dropdown-item" href="actperfil.php">Actualizar Perfil</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cerrarSesion.php">Salir</a>
        </li>
      </ul>
    </div>
  </nav>  <!-- Termina navbar -->
  </div>  <!-- Termina header -->
