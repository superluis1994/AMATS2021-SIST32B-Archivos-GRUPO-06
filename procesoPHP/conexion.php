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

function EliminarXid($id)
{
  $sql="DELETE FROM usuarios WHERE id_usuario='$id'";
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
function generarCita($fecha_agendacion,$fecha_consulta,$horaConsul,$id_paciente,$doctor)
{
  $sql="INSERT INTO consultas(fecha_agendacion,fecha_consulta,horaConsulta,id_paciente,doctor )
  VALUES('$fecha_agendacion','$fecha_consulta','$horaConsul','$id_paciente','$doctor');";
  $inser=$this->com->query($sql);
        return $inser;
}
function consultaCitaRepetida($tabla,$dato,$dato2)
{
  $sql="SELECT *FROM $tabla WHERE fecha_consulta='$dato' and  horaConsulta='$dato2'";
  $res=$this->com->query($sql);
        return $res;
}
function actualizarDoctorPerfil($usuario,$nombreCompleto,$correo,$passw,$foto,$id_usuario)
{
  if($foto=="nada")
  {
    $sql="UPDATE usuarios SET usuario = '$usuario', nombreCompleto = '$nombreCompleto', correo = '$correo', passw = '$passw'
    WHERE id_usuario = '$id_usuario'";
      $res=$this->com->query($sql);
            return $res;

  }else{
     $sql="UPDATE usuarios SET usuario = '$usuario', nombreCompleto = '$nombreCompleto', correo = '$correo', passw = '$passw', foto = '$foto'
WHERE id_usuario = '$id_usuario'";
  $res=$this->com->query($sql);
        return $res;
  }
 
}

function pacientesDia($tabla,$campo,$dato,$campo2,$dato1)
{
  $sql="SELECT *FROM $tabla INNER JOIN usuarios ON consultas.id_paciente=usuarios.id_usuario  WHERE $campo='$dato' And $campo2='$dato1' ";
  $res=$this->com->query($sql);
        return $res;
}
function citas($tipo)
{
  $sql="SELECT *FROM $tipo ";
  $res=$this->com->query($sql);
        return $res;
}
function Eliminar($tabla,$campo,$id)
{
  $sql="DELETE FROM $tabla WHERE $campo='$id'";
  $res=$this->com->query($sql);
        return $res;
}
function consultaCuadroMe($tipo)
{
  $sql="SELECT *FROM usuarios INNER JOIN cuadropaciente ON cuadropaciente.id_cuadro = usuarios.id_usuario WHERE tipo='$tipo' And id_paciente=!null";
  $res=$this->com->query($sql);
        return $res;
}
function insercuadroId($id)
{
  $sql="INSERT INTO cuadropaciente (id_paciente)
  VALUES('$id');";
  $res=$this->com->query($sql);
        return $res;
}
// paciente 
function citaPaciente($dato1)
{
  $sql="SELECT *FROM recetas WHERE id_paciente='$dato1'";
  $res=$this->com->query($sql);
        return $res;
}
function Recetainser($id_paciente,$nombre_medicina,$doctor,$fecha_de_receta,$id_cuadro)
{
  $sql="INSERT INTO recetas (id_paciente,nombre_medicina,doctor,fecha_de_receta,id_cuadro)
  VALUES('$id_paciente','$nombre_medicina','$doctor','$fecha_de_receta','$id_cuadro');";
  $res=$this->com->query($sql);
        return $res;
}


}

?>