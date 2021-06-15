<?php
require_once('procesoPHP/conexion.php');
$obj=new clsConexion();

$ConsulPerfil=$obj->consultaUniversal("usuarios","id_usuario",$_SESSION["usarioActivo"][1][0]);

$rowsss=$ConsulPerfil->fetch_assoc();

?>

<!-- datos del perfil  -->
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Editar Perfil</h4>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" placeholder="Username" value="<?php echo $rowsss["usuario"] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="text" value="<?php echo $rowsss['passw'] ?>" class="form-control" id="pass">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto</label>
                                <input type="file"  class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input type="email" value="<?php echo $rowsss['correo'] ?>" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" class="form-control" value="<?php echo $rowsss["nombreCompleto"] ?>" placeholder="Company" value="Mike">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Editar Perfil</button>
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
                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                      <h4 class="title">Mike Andrew<br />
                         <small>michael24</small>
                      </h4>
                    </a>
                </div>
                <p class="description text-center"> "Lamborghini Mercy <br>
                                    Your chick she so thirsty <br>
                                    I'm in that two seat Lambo"
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