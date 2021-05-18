<?php
$SERVIDOR='localhost';
$USUARIO='root';
$CLAVE='';
$BASEDATOS='salud360';

class clsConexion{
    private $conex;
    public function __construct(){

        try{
            $this->conex=new mysqli($SERVIDOR,$USUARIO,$CLAVE,$BASEDATOS);

        }
        catch(Exception $e){
            echo $e->errorMessage();
        }
    }
}

?>
