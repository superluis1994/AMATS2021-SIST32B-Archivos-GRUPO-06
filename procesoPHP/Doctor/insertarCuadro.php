<?php
require_once("conexion.php");
$obj=new clsConexion();
$datosP=$obj->consultaUniversal("cuadropaciente","id_paciente",$_POST['idPaciente1']);
$dat=$datosP->fetch_assoc();
if($obj->CrearCuadroPaciente($_POST["edad"],$_POST["peso"],$_POST["altura"],$_POST["Discapacida"],
$_POST["sangre"],$_POST["ciuda"],$_POST["departamento"],$_POST["idPaciente1"]))
{
   
}
else{

}



?>
