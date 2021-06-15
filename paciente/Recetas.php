<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Recetas Medicas</h4>
                <p class="category">Historial de recetas</p>
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
                        $resultL=$obj->citaPaciente("recetas","id_paciente",$_SESSION["usarioActivo"][1][0]);
                        while ($colD = $resultL->fetch_assoc()){
                        echo" <form action='' method='POST'>
                        <tr>
                            <td>".$colD["id_usuario"]."</td>
                            <td>".$colD["nombreCompleto"]."</td>
                            <td>".$colD["tipo"]."</td>
                            <td> <button type='submit' name='ok1' value='".$colD["id_usuario"]."' class='btn btn-info btn-fill pull-right'>elimina</button></td>
                        </tr></form>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="col-md-12">
       
    </div>


</div>