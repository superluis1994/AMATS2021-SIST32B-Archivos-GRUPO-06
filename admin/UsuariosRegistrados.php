<div class="row">
    <div class="col-md-4"  >
        <div class="card">
            <div class="header">
                <h4 class="title">DOCTORES</h4>
                <p class="category">Here is a subtitle for this table</p>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Buscar Doctor" value="">
                </div>
                </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Tipo</th>
                    </thead>
                    <tbody>
                        <?php
                        $resultL=$obj->consultaPersonal("Doctor");
                        while ($colD = $resultL->fetch_assoc()){
                        echo"<tr>
                            <td>".$colD["id_usuario"]."</td>
                            <td>".$colD["nombreCompleto"]."</td>
                            <td>".$colD["tipo"]."</td>
                            <td> <button type='submit' class='btn btn-info btn-fill pull-right'>elimina</button></td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="col-md-4 "  >
        <div class="card" >
            <div class="header">
                <h4 class="title">Secretarias</h4>
                <p class="category">Here is a subtitle for this table</p>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Buscar Secretaria" value="">
                </div>
                </div>
        <div class="content table-responsive table-full-width overflow-auto"  >
            <table class="table table-hover table-striped" >
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tipo</th>
                   
                </thead>
                <tbody>
                    <?php
                        $result=$obj->consultaPersonal("Secretaria");
                        while ($colSS = $result->fetch_assoc()){
                        echo"<tr>
                            <td>".$colSS["id_usuario"]."</td>
                            <td>".$colSS["nombreCompleto"]."</td>
                            <td>".$colSS["tipo"]."</td>
                            <td> <button type='submit' class='btn btn-info btn-fill pull-right'>elimina</button></td>
                        </tr>";
                        }
                        ?>
                </tbody>
            </table>

        </div>
    </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h4 class="title">Pacientes</h4>
                <p class="category">Here is a subtitle for this table</p>
                
                
            </div>
            <div class="col-md-7">
                <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Buscar Paciente" value="">
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
                </thead>
                <tbody>
                    <?php
                    $result=$obj->consultaPersonal("pacientes");
                    while ($colP = $result->fetch_assoc()){
                    echo"<tr>
                        <td>".$colP["id_usuario"]."</td>
                        <td>".$colP["nombreCompleto"]."</td>
                        <td>".$colP["tipo"]."</td>
                        <td> <button type='submit' class='btn btn-info btn-fill pull-right'>elimina</button></td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    </div>

</div>