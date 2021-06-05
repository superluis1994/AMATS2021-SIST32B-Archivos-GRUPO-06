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
    function loguin($correo,$pass)
{
  $sql="SELECT *FROM usuarios WHERE correo='' AND passw='1994'";
  $res=$this->com->query($sql);
        return $res;
}
}

?>
