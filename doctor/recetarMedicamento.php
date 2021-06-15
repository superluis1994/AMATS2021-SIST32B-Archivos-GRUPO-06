<?php
require_once('procesoPHP/conexion.php');
$obj=new clsConexion();


 $Fecha=date('Y-m-d');
?>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="header">
                <h4 class="title">RECETAR MEDICAMENTOS</h4>
                <p class="category">Elija un Paciente para recetar</p>
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
        $rep=$obj->consultaUniversal("cuadropaciente","id_paciente",$_POST["gConPac"]);
        $r=$rep->fetch_assoc();
         $p=$r['id_cuadro'];

       echo "<div class='col-md-7'>
        <div class='card'>
            <div class='header'>
                <h4 class='title'>Receta</h4>
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
                                <label>Cuadro</label>
                                <input type='text' name='cuadro' class='form-control' value='".$p."' required  readonly>
                            </div>
                        </div>
                        
                    </div>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>Medicamentos</label>
                                <textarea rows='5' name='medicamento' class='form-control' onkeypress='return numerosyletras(event)' placeholder='Especifique la Alergias' style='resize: none;'></textarea>
                            </div>
                        </div>
                    </div>
                    
                </div>



                    <div class='row'>
                    <input type='text' name='id_usuario' value='".$_POST['gConPac']."' hidden>
                    <button type='submit' name='EnviarDatosReceta' class='btn btn-info btn-fill pull-right'>Agendar Consulta</button>
                    <div class='clearfix'></div></div>
                </form>
            </div>
        </div>
    </div>";   
     }

     if(isset($_POST["EnviarDatosReceta"]))
     {
         
         $obj->Recetainser($_POST["id_usuario"],$_POST["medicamento"],$_POST["doctor"],$_POST["agendacion"],$_POST["cuadro"]);
         
     }

     ?>
  

</div>
