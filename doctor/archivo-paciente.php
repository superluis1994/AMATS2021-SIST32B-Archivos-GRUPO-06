<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Información de los pacientes</h4>
                <p class="category">Archivos</p>
            </div>
            <div class="col-md-5">
                            <div class="form-group">
                                
                                <input type="text" class="form-control" placeholder="Buscar Archivo" value="">
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                           
                            <form action="PerfilDoctor.php?pagina=doctor/creaCuadro.php" method="POST">
                            <button type="submit" name="cuadro" class="btn btn-info btn-fill pull-right">Crear cuadro</button>
                            </form>
                            <?php
                            // if(isset($_POST["cuadro"]))
                            // {
                            //     echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL= PerfilDoctor.php?pagina=doctor/creaCuadro.php'>";
                               

                            // }

                            // ?>
                               
                            </div> 
                        </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Country</th>
                        <th>City</th>
                        <th></th>
                        
                    </thead>
                    <tbody>
                        <?php
                        $result=$obj->consultaCuadroMe("Paciente");
                        while ($colCP = $result->fetch_assoc()){
                        echo"<form action='' method='POST'>
                        <tr>
                            <td>".$colCP["id_usuario"]."</td>
                            <td>".$colCP["nombreCompleto"]."</td>
                            <td>".$colCP["tipo"]."</td>
                            <input type='text' name='nombre' value='".$colCP["nombreCompleto"]."' hidden>
                            <td> <button type='submit' name='gConPac' value='".$colCP["id_usuario"]."' class='btn btn-info btn-fill pull-right'>Procesar</button></td>
                        </tr>
                    </form>";
                        }
                        ?>
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
