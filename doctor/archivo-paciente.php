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
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td><button type="submit" class="btn btn-info btn-fill pull-right">Ver cuadro</button></td>
                            <td><button type="submit" class="btn btn-info btn-fill pull-right">Eliminar Cuadro</button></td>

                        </tr>
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
