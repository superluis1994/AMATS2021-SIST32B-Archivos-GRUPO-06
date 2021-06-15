<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">CITAS</h4>
                <p class="category">AGENDADAS</p>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Buscar Archivo" value="">
                </div>
                </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Salary</th>
                        <th>Country</th>
                        <th>City</th>
                    </thead>
                    <tbody>
                    <?php
                        $result=$obj->consultaPersonal("Consultas","id_doctor",$_SESSION["usarioActivo"][0]);
                        while ($cols = $result->fetch_assoc()){
                        echo"<tr>
                            <td>".$colDoc["id_consultas"]."</td>
                            <td>".$colDoc["nombreCompleto"]."</td>
                            <td>".$colsDoc["fecha_consulta"]."</td>
                        </tr>";
                        }
                        ?>
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>


  

</div>