<?php
require_once('procesoPHP/conexion.php');
$obj=new clsConexion();

// $ConsulPerfil=$obj->consultaUniversal("usuarios","id_usuario",$_SESSION["usarioActivo"][1][0]);

// $rowsss=$ConsulPerfil->fetch_assoc();

?>

<!-- datos del perfil  -->
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Editar Perfil</h4>
            </div>
            <div class="content">
                <form method='POST' action="" ENCTYPE="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" name="usuario" class="form-control" placeholder="Username" value="<?php echo $rowsss["usuario"] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="text" name="pass" value="<?php echo $rowsss['passw'] ?>" class="form-control" id="pass">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto</label>
                                <input type="file" name='foto'  class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input type="email" name="correo" value="<?php echo $rowsss['correo'] ?>" class="form-control" placeholder="Email" readonly>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $rowsss["nombreCompleto"] ?>" placeholder="Company" value="Mike">
                            </div>
                        </div>
                    </div>

                    <button type="submit" name='actualizar' class="btn btn-info btn-fill pull-right">Actualizar Perfil</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                     <a href="#">
                    <img class="avatar border-gray" src="<?php echo $rowsss['foto'] ?>"  alt="..."/>
                    <br>
                    <br>
                      <h4 class="title"><?php echo $rowsss["nombreCompleto"] ?><br />
                         <small><?php echo $rowsss["usuario"] ?></small>
                      </h4>
                    </a>
                </div>
                <p class="description text-center"> "<?php echo $rowsss['correo'] ?>"
                </p>
            </div>
            <hr>
            <div class="text-center">
                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

            </div>
        </div>
    </div>

</div>
<?php
if(isset($_POST["actualizar"]))
{
    $archivo = $_FILES['foto'];
    if($archivo["tmp_name"]=="") 
    {
        $name="nada";
        if($obj->actualizarDoctorPerfil($_POST["usuario"],$_POST["nombre"],$_POST["correo"],$_POST["pass"],$name,$_SESSION["usarioActivo"][1][0]))
        {
            echo"<h2>Perfil Actualizado</h2>";
        echo"<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilPaciente.php?pagina=paciente/perfil.php'>";   
        }
    }
    else{

        //Obtenemos algunos datos necesarios sobre el archivo
   $tipo = $_FILES['foto']['type'];
   $tamano = $_FILES['foto']['size'];
   $temp = $_FILES['foto']['tmp_name'];
   //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
  if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
     echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
     - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
  }
  else {
    if (is_uploaded_file ($_FILES['foto']['tmp_name'])){ 
        $tmp_name = $_FILES["foto"]["tmp_name"];
        $name = "img/".$_FILES["foto"]["name"];
        $nombrearchivoSinExtension=substr($name,0,strpos($name, '.'));   
       $extensionArchivo=substr(strrchr($name, '.'), 1);
        if (is_file($name)) {
          $idUnico=time();
          $name = "img/".$idUnico."-".$_FILES["foto"]["name"];        
        }

            move_uploaded_file($tmp_name,$name);
     
         
        if($obj->actualizarDoctorPerfil($_POST["usuario"],$_POST["nombre"],$_POST["correo"],$_POST["pass"],$name,$_SESSION["usarioActivo"][1][0]))
       {
           echo"<h2>Perfil Actualizado</h2>";
        echo"<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilPaciente.php?pagina=paciente/perfil.php'>";   
       }

    
          
      }
     
  }
    }
     
}

?>