<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('CLAVE','');
define('BASEDATOS','salud360');


 class clsConexion{
    private $com;
    public function __construct()
    {
        try{
            $this->com=new mysqli(SERVIDOR,USUARIO,CLAVE,BASEDATOS);

        }catch(Exception $e){
            echo $e->errorMessage();
        }
    }

    function consultaPersonal($tipo)
{
  $sql="SELECT *FROM usuarios WHERE tipo='$tipo'";
  $res=$this->com->query($sql);
        return $res;
}
function consultaUniversal($tabla,$campo,$dato)
{
  $sql="SELECT *FROM $tabla WHERE $campo='$dato'";
  $res=$this->com->query($sql);
        return $res;
}
function consultaUniversal2($tabla,$campo,$dato)
{
  $sql="SELECT *FROM $tabla WHERE $campo='$dato'";
  $res=$this->com->query($sql);
        return $res;
}

function RegistrarPersonal($usuario,$nombreCompleto,$correo,$pass,$tipo)
{
  $sql="INSERT INTO usuarios (usuario,nombreCompleto,correo, passw,tipo)
  VALUES('$usuario','$nombreCompleto','$correo','$pass','$tipo');";
  $inser=$this->com->query($sql);
        return $inser;
}
function asignarSecretaria($idDoctor,$idSecretaria)
{
  $sql="INSERT INTO asignaciondoctosecre (id_doctor,id_secretaria)
  VALUES('$idDoctor','$idSecretaria');";
  $inser=$this->com->query($sql);
        return $inser;
}
function loguin($correo,$pass)
{
  $sql="SELECT *FROM usuarios WHERE correo='$correo' AND passw='$pass'";
  $res=$this->com->query($sql);
        return $res;
}
  function reg($usuario,$nombreCompleto,$correo,$passw,$tipo)
  {
    $sql="INSERT INTO usuarios(usuario , nombreCompleto , correo , passw , tipo)
      VALUES('$usuario','$nombreCompleto','$correo','$passw','$tipo');";
    $inser=$this->com->query($sql);
          return $inser;
  }

}

?>