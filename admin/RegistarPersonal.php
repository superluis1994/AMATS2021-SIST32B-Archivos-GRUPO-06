<!-- datos del perfil  -->
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Registrar Personal</h4>
            </div>
            <div class="content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Luis">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contraseña</label>
                                <input type="password" class="form-control" name="pass" placeholder="********">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Company" value="Mike">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" placeholder="Last Name" value="Andrew">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Correo Electronico</label>
                                <input type="email" name="correo" class="form-control" placeholder="Ejemplo@hotmail.com" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select class="form-control" name="tipo" id="">
                                    <option selected class="form-control" value="Secretaria">Secretaria</option>
                                    <option class="form-control" value="Doctor">Doctor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name='inserP' class="btn btn-info btn-fill pull-right">Registar Personal</button>
                    <div class="clearfix"></div>
                </form>
                
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST["inserP"])){
        $D=$obj->consultaUniversal("usuarios","correo",$_POST['correo']);
        $repe=$D->num_rows;
        if($repe<1)
        {
    $inser=$obj->RegistrarPersonal($_POST["usuario"],ucwords($_POST["nombre"]." ".$_POST["apellidos"]),$_POST["correo"],$_POST["pass"],$_POST["tipo"]);
    if( $inser)
    {
        echo"<h2>Dato introducido</h2>";
       echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilAdmin.php?pagina=admin/RegistarPersonal.php'>";
    }
}
else{
    echo "<h1> ya exite un usuario con es correo</h1>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilAdmin.php?pagina=admin/RegistarPersonal.php'>";
}
}
    ?>

</div>
