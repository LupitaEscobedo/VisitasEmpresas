<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Itver</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Permite que el sitio sea responsive -->
      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/header.css">
      <link rel="stylesheet" href="css/datatables.min.css"/>
   </head>
   <body>
      <header>
         <?php include('header.php') ?>
      </header>
      <img class="logo" src="img/itver.png" alt="">
      <div class="container">
      <div class="textoEncabezado">
         <h3>Visitas programadas</h3>
         <div class="periodo">
            <h3>Periodo: <span class="mesesPeriodo">Agosto-Diciembre</span> <span class="añoPeriodo">2017</span></h3>
         </div>
      </div>

<div class="container">
  <table id="example" class="table table-striped" cellspacing="0" >
        <thead id="table_header">
            <tr>
                <th class="head"> Fecha </th>
                <th class="head"> Hora</th>
                <th class="head"> Información </th>
                <th class="head"> </th>
            </tr>

        </thead>
    <!--    <tfoot>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Información de Visita</th>
                <th>Registro</th>
            </tr>
        </tfoot>-->
        <tbody>

            <tr>
                <td>02 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>INAOE <br><span class="m-text"><span class="bot-text">Puebla</span> <br>Docente: <span class="bot-text">Martha Martínez Moreno</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>04 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>Telmex Biblioteca Digital <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>08 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>iLab <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>14 Sep 2017</td>
                <td>10:00 hrs.</td>
                <td>Bimbo del Golfo <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>18 Sep 2017</td>
                <td>10:00 hrs.</td>
                <td>CFE Laguna Verde <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>21 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>Grant Prideco <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>30 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>INIDETAM <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>01 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>San Francisco <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>01 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>Edinburgh <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>01 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>London <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>01 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>Edinburgh <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>01 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>San Francisco <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>
            <tr>
                <td>01 Sep 2017</td>
                <td>9:00 hrs.</td>
                <td>London <br><span class="m-text"><span class="bot-text">Cd. Industrial</span> <br>Docente: <span class="bot-text">Carlos Roberto González Escarpeta</span></span></td>
                <td><button type="button" class="btn btn-primary btn-sm">Registrarse</button></td>
            </tr>

        </tbody>
    </table>
</div>

      </div>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.bootstrap.min.js"></script>
      <script>
        $('#example').dataTable( {
  		"lengthChange": false,
  		"paging":false,
  		"info":false,
  		"oLanguage": {
  		"sSearch": "<span>Buscar:</span> _INPUT_" //search
		}
		});

      </script>
   </body>
</html>
