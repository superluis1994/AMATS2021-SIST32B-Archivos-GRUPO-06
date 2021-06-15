<?php
require_once('procesoPHP/conexion.php');
$obj=new clsConexion();

 $Fecha=date('Y-m-d');
?>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="header">
                <h4 class="title">AGENDAR CITA</h4>
                <p class="category">Elija un Paciente</p>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Buscar Archivo" value="">
                </div>
                </div>
            <div class="content table-responsive ">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                    </thead>
                    <tbody> 
                        <?php
                        $result=$obj->consultaPersonal("Paciente");
                        while ($colP = $result->fetch_assoc()){
                        echo"<form action='' method='POST'>
                        <tr>
                            <td>".$colP["id_usuario"]."</td>
                            <td>".$colP["nombreCompleto"]."</td>
                            <td>".$colP["tipo"]."</td>
                            <input type='text' name='nombre' value='".$colP["nombreCompleto"]."' hidden>
                            <td> <button type='submit' name='gConPac' value='".$colP["id_usuario"]."' class='btn btn-info btn-fill pull-right'>Procesar</button></td>
                        </tr>
                    </form>";
                        }
                        ?>
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div>

     <?php
     if(isset($_POST["gConPac"]))
     {
       echo "<div class='col-md-7'>
        <div class='card'>
            <div class='header'>
                <h4 class='title'>Agendacion de cita</h4>
                <p>introdusca los datos solicitados</p>
            </div>
            <div class='content'>
                <form method='POST' action=''>
                    <div class='row'>
                        
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label for=''>Paciente</label>
                                <input type='text' class='form-control' value='".$_POST['nombre']."' readonly>
                            </div>
                        </div>

                        <div class='col-md-5'>
                            <div class='form-group'>
                                <label for=''>Doctor</label>
                                <select name='doctor' class='form-control' id=''>";
                        $result=$obj->consultaPersonal('Doctor');
                        while ($colD = $result->fetch_assoc()){
                        echo"
                            <option value='".$colD['nombreCompleto']."'>".$colD['nombreCompleto']."</option>";
                        }
                    
                    echo"</select>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Fecha de Agendacion</label>
                                <input type='text' name='agendacion' class='form-control' value='".$Fecha."' placeholder='Last Name' readonly>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Fecha de Consulta</label>
                                <input type='date' name='fechaConsulta' class='form-control' required>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Horario</label>
                                <select class='form-control' name='hora'>
                                    <option class='form-control' value='8 AM<'>8 AM</option>
                                    <option class='form-control' value='9 AM'>9 AM</option>
                                    <option class='form-control' value='10 AM'>10 AM</option>
                                    <option class='form-control' value='11 AM'>11 AM</option>
                                    <option class='form-control' value='1 PM'>1 PM</option>
                                    <option class='form-control' value='2 PM'>2 PM</option>
                                    <option class='form-control' value='3 PM'>3 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>



                    <div class='row'>
                    <input type='text' name='id_usuario' value='".$_POST['gConPac']."' hidden>
                    <button type='submit' name='EnviarDatosCita' class='btn btn-info btn-fill pull-right'>Agendar Consulta</button>
                    <div class='clearfix'></div>
                </form>
            </div>
        </div>
    </div>";   
     }

     if(isset($_POST["EnviarDatosCita"]))
     {
         $rep=$obj->consultaCitaRepetida("consultas",$_POST["fechaConsulta"],$_POST["hora"]);
         $h=$rep->num_rows;
         if($h==1)
         {
             echo "<h1>ya esta ocupado ese horario</h1>";
             echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilDoctor.php?pagina=doctor/Cita.php'>";
         }
         else
         {
            $obj->generarCita($_POST["agendacion"],$_POST["fechaConsulta"],$_POST["hora"],$_POST["id_usuario"],$_POST["doctor"]);
             echo"<h1>Cita Registrada</h1>";
             echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=PerfilDoctor.php?pagina=doctor/Cita.php'>";
         }
         
     }

     ?>
  

</div>
