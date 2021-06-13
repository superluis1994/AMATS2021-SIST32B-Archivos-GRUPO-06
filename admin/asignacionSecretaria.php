<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="header">
                <h4 class="title">ASIGNACION DE SECRETARIA</h4>
                <p class="category">selecione Doctor y secretaria asignar</p>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="header">
                <h4 class="title">DOCTORES</h4>
                <p class="category">Here is a subtitle for this table</p>
            </div>
            <div class="content table-responsive table-full-width">
                <form action="" method="POST">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>tipo</th>
                    </thead>
                    <tbody>
                        <?php
                        $resultL=$obj->consultaPersonal("Doctor");
                        while ($col = $resultL->fetch_assoc()){
                        echo"<tr>
                            <td><input type='radio' value='".$col["id_usuario"]."' name='selectDoct' id='' required></td>
                            <td>".$col["id_usuario"]."</td>
                            <td>".$col["nombreCompleto"]."</td>
                            <td>".$col["tipo"]."</td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="header">
                <h4 class="title">Secretarias</h4>
                <p class="category">Here is a subtitle for this table</p>
            </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>tipo</th>
                </thead>
                <tbody>
                <?php
                        $result=$obj->consultaPersonal("Secretaria");
                        while ($cols = $result->fetch_assoc()){
                        echo"<tr>
                            <td><input type='radio' value='".$cols["id_usuario"]."' name='selecSecre' id=''requiered></td>
                            <td>".$cols["id_usuario"]."</td>
                            <td>".$cols["nombreCompleto"]."</td>
                            <td>".$cols["tipo"]."</td>
                        </tr>";
                        }
                        ?>
                </tbody>
            </table>
            

        </div>
        
    </div>
    <button type="submit"name='asigSecre' class="btn btn-info btn-fill pull-right">Asignar</button>
</form>
    </div>


</div>
<?php
if(isset($_POST["asigSecre"]))
{    $consulta=$obj->consultaUniversal("asignaciondoctosecre","id_doctor",$_POST["selectDoct"]);
     $consulta2=$obj->consultaUniversal("asignaciondoctosecre","id_secretaria",$_POST["selecSecre"]);
     
    if(($consulta->num_rows=="0" && $consulta2->num_rows=="0") && ($consulta->num_rows=="0" || $consulta2->num_rows=="0"))
    {
    $asigSecr=$obj->asignarSecretaria($_POST["selectDoct"],$_POST["selecSecre"]);
   if($asigSecr)
   {
        echo"si la logre";
   }
}
else
{
    echo"ya exite";
}
}
?>