<?php
require_once("conexion.php");
$obj=new clsConexion();

$inser=$obj->RegistrarPersonal($_POST["usuario"],ucwords($_POST["nombre"]." ".$_POST["apellidos"]),$_POST["correo"],$_POST["pass"],$_POST["tipo"]);
if( $inser)
{
   echo "si se pudo";
}

?>