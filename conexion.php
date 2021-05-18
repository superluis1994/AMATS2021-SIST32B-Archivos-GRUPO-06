<?php
difine('SERVIDOR','localhost');
difine('USUARIO','root');
difine('CLAVE', '');
difine('BASEDATOS','salud360');

class clsConexion{
    private $conex;
    public function __construct(){

        try{
            $this->conex=new mysqli(SERVIDOR,USUARIO,CLAVE,BASEDATOS);

        }
        catch(Exception $e){
            echo $e->errorMessage();
        }
    }
}

?>
