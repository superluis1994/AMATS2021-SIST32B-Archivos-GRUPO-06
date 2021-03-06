<?php
session_start();
require_once('procesoPHP/conexion.php');
$obj=new clsConexion();

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<!-- validacion de los input -->
  <script src="validacion/inpuyValidacion.js"></script>



</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Perfil doctor
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="PerfilDoctor.php?pagina=doctor/citasDdia.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>CITAS DEL DIA</p>
                    </a>
                </li>
                <li>
                    <a href="PerfilDoctor.php?pagina=doctor/archivo-paciente.php">
                        <i class="pe-7s-user"></i>
                        <p>INFORME DEL PACIENTE</p>
                    </a>
                </li>
                <li>
                    <a href="PerfilDoctor.php?pagina=doctor/Cita.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>GENERAR CITA</p>
                    </a>
                </li>
                <li>
                    <a href="PerfilDoctor.php?pagina=doctor/recetarMedicamento.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>GENERAR Receta</p>
                    </a>
                </li>
                <li>
                    <a href="PerfilDoctor.php?pagina=doctor/perfil.php">
                        <i class="pe-7s-user"></i>
                        <p>PERFIL</p>
                    </a>
                </li>
                <li>
                    <a href="PerfilDoctor.php?pagina=admin/Estadisticas.php">
                        <i class="pe-7s-graph"></i>
                        <p>ESTADISTICA</p>
                    </a>
                </li>
            
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Procesos</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="PerfilDoctor.php?pagina=doctor/perfil.php">
                               <p>Cuenta</p>
                            </a>
                        </li>

                        <li>
                            <a href="cerrarSession.php">
                                <p>Cerrar la sesi??n</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
            <?php
     if(isset($_GET["pagina"]))
     {
		 include($_GET["pagina"]);

      }
	  else{
     
     echo" <h1>BIENVENIDO A TU PERFIL DE SALUD 360</h1>
    <p class='lead'>Donde quiera que se ama el arte de la medicina se ama tambi??n a la humanidad.</p>
    <p class='lead'>
      <a href='index.php?pagina=listaEquipo.php' class='btn btn-lg btn-secondary fw-bold border-white bg-white' > <font style='color:black;'>VER PERFIL</font> </a>
    </p>";

	  }

   ?>
   
            </div>
        </div>



                
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	    ({
            	// icon: 'pe-7s-gift',
            	// message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
