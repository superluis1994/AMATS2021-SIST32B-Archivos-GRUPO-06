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

  // crud doctor
  function CrearCuadroPaciente($edad,$peso,$altura,$discapcidad,$tipo_sangre,$ciudad,$departamento,$idPaciente,$idCuadro)
  {
    $sql="UPDATE cuadropaciente SET edad = '$edad', peso = '$peso', altura = '$altura', discapcidad = '$discapcidad', tipo_sangre = '$tipo_sangre', 
    ciudad = '$ciudad', departamento = '$departamento', id_paciente = '$idPaciente' WHERE id_cuadro = '$idCuadro';";
    $inser=$this->com->query($sql);
          return $inser;
  }
  function consultaPacientes($tabla,$campo,$dato,$campo2,$dato2)
{
  $sql="SELECT *FROM $tabla INNER JOIN cuadropaciente ON usuarios.id_usuario = cuadropaciente.id_paciente WHERE $campo='$dato' and $campo2='$dato2'";
  $res=$this->com->query($sql);
        return $res;
}

}

?>