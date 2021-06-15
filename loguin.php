<?php
session_start();
include("procesoPHP/conexion.php");
$obj=new clsConexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;" style="height: 80%;" >
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Correo</span>
						<input class="input100" type="text" name="correo" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="enviarlog" class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="registrar.php" class="dis-block txt3 hov1 p-r-20 p-t-10 p-b-5 p-l-15">
							Crear Cuenta
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
   if(isset($_POST["enviarlog"]))
   {
      
        $log=$obj->loguin($_POST["correo"],$_POST["pass"]);
	   if($log->num_rows > 0)
	   {
		   
        $tip=$log->fetch_assoc();
           if($tip["tipo"]=="Doctor")
           {
			$datt[]=$tip["id_usuario"];
			$datt[]=$tip["nombreCompleto"];
			$t[1]=$datt;
			$_SESSION["usarioActivo"]=$t;
		   echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=PerfilDoctor.php'>";
           }
          else if($tip["tipo"]=="Secretaria")
           {
			$datt[]=$tip["id_usuario"];
			$datt[]=$tip["nombreCompleto"];
			$t[1]=$datt;
			$_SESSION["usarioActivo"]=$t;
		   echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=PerfilSecretaria.php'>";
           }
          else if($tip["tipo"]=="Paciente")
           {
			$datt[]=$tip["id_usuario"];
			$datt[]=$tip["nombreCompleto"];
			$t[1]=$datt;
			$_SESSION["usarioActivo"]=$t;
		   echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=PerfilPaciente.php'>";
		   echo"si entro";
           }
		   else if($tip["tipo"]=="admin")
           {
			$datt[]=$tip["id_usuario"];
			$datt[]=$tip["nombreCompleto"];
			$t[1]=$datt;
			$_SESSION["usarioActivo"]=$t;
		   echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=PerfilAdmin.php'>";
           }
	   }
       else
       {
           echo "usuario no exite";
       }
   }


  ?>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>