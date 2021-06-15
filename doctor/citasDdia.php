<?php
$ConsulPerfil=$obj->consultaUniversal("usuarios","id_usuario",$_SESSION["usarioActivo"][1][0]);

$rowsss=$ConsulPerfil->fetch_assoc();

?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">CITAS DEL DIA</h4>
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
                        <th>Fecha</th>
                        <th></th>
              
                    </thead>
                    <tbody>
                    <?php
                        $result=$obj->pacientesDia("consultas","doctor",$rowsss["nombreCompleto"],"fecha_consulta",$Fecha=date('Y-m-d') );
                        while ($cols = $result->fetch_assoc()){
                        echo"<tr>
                            <td>".$cols["id_consultas"]."</td>
                            <td>".$cols["nombreCompleto"]."</td>
                            <td>".$cols["fecha_consulta"]."</td>
                            <td>".$cols["horaConsulta"]."</td>
                            <form action='' method='POST'>
                            <td><button type='submit' value='".$cols["id_consultas"]."' name='borrarC' class='btn btn-info btn-fill pull-right'>Eliminar</button></td>
                        </form>
                        </tr>";
                        }
                        ?>
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
<?php
if(isset($_POST["borrarC"]))
{
    echo"probando ".$_POST["borrarC"];
 if($obj->Eliminar("consultas","id_consultas",$_POST["borrarC"]))
 { 
     echo"probando";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilDoctor.php?pagina=doctor/citasDdia.php'>";
 }   
}

?>