<?php
require_once('procesoPHP/conexion.php');
$obj=new clsConexion();

// $ConsulPerfil=$obj->consultaUniversal("usuarios","id_usuario",$_SESSION["usarioActivo"][0]);

// $rowsss=$ConsulPerfil->fetch_assoc();

?>
<div class="row">
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">CREAR CUADRO</h4>
            <p class="category">Elija un Paciente</p>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            
            <input type="text" class="form-control" onkeypress='return numerosyletras(event)' placeholder="Buscar Paciente" value="">
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
                        <td> <button type='submit' name='CreaCuadro' value='".$colP["id_usuario"]."' class='btn btn-info btn-fill pull-right'>Crear</button></td>
                    </tr>
                </form>";
                    }
                    ?>
                
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- datos del perfil  -->
<?php
if(isset($_POST["CreaCuadro"]))
{ 
    $result3=$obj->consultaUniversal("cuadropaciente","id_paciente",$_POST["CreaCuadro"]);
    if($result3->num_rows==1)
    {
         $idPaciente=$_POST["CreaCuadro"];
   echo"<div class='col-md-8'>
   <div class='card'>
       <div class='header'>
           <h4 class='title'>Crear Cuadro</h4>
       </div>
       <div class='content'>
           <form action='procesoPHP/Doctor/insertarCuadro.php' name='l' method='POST'>
               <div class='row'>
                   <div class='col-md-4'>
                       <div class='form-group'>
                           <label>Nombre</label>
                           <input type='text' name='nombre' value='".$_POST['nombre']."' class='form-control' onkeypress='return validar(event)' placeholder='nombre' maxlength='60' readonly>
                       </div>
                   </div>
                   <div class='col-md-4'>
                       <div class='form-group'>
                           <label for='edad'>Edad</label>
                           <input type='text' name='edad' class='form-control' oninput='securePhoneNumber(this)' maxlength='2' id='edad'>
                       </div>
                   </div>
                   <div class='col-md-4'>
                    <div class='form-group'>
                        <label for='edad'>Peso En Libras</label>
                        <input type='text'  name='peso' class='form-control' id='edad' oninput='securePhoneNumber(this)' maxlength='3'>
                    </div>
                </div>
               </div>

               <div class='row'>
                <div class='col-md-4'>
                    <div class='form-group'>
                        <label for='altura'>Altura</label>
                        <input type='text'  name='altura' class='form-control' id='altura' oninput='securePhoneNumber(this)' maxlength='4' max='3'>
                    </div>
                </div>
                   <div class='col-md-3'>
                       <div class='form-group'>
                           <label>Tipo de Sangre</label>
                           <select name='sangre' id='' class='form-control'>
                               <option class='form-control' value='O-'>O-</option>
                               <option class='form-control' value='O+'>O+</option>
                               <option class='form-control' value='B-'>B-</option>
                               <option class='form-control' value='B+'>B+</option>
                               <option class='form-control' value='A-'>A-</option>
                               <option class='form-control' value='A+'>A+</option>
                               <option class='form-control' value='AB-'>AB</option>
                               <option class='form-control' value='AB+'>AB+</option>
                           </select>
                       </div>
                   </div>
                   <div class='col-md-5'>
                    <div class='form-group'>
                        <label>Telefono</label>
                        <input type='text' class='form-control' placeholder='7458-5585' onKeyPress='return soloNumeros(event)' maxlength='8'>
                    </div>
                </div>
               </div>

               <div class='row'>
                   <div class='col-md-3'>
                       <div class='form-group'>
                           <label>Departamentos</label>
                           <select name='departamento' id='' class='form-control'>
                               <option class='form-control' value='Ahuachapán'>Ahuachapán</option>
                               <option class='form-control' value='Cabañas'>Cabañas</option>
                               <option class='form-control' value='Chalatenango'>Chalatenango</option>
                               <option class='form-control' value='Cuscatlán'>Cuscatlán</option>
                               <option class='form-control' value='La Libertad'>La Libertad</option>
                               <option class='form-control' value='La Paz'>La Paz</option>
                               <option class='form-control' value='La Unión'>La Unión</option>
                               <option class='form-control' value='Morazán'>Morazán</option>
                               <option class='form-control' value='San Miguel'>San Miguel</option>
                               <option class='form-control' value='San Salvador'>San Salvador</option>
                               <option class='form-control' value='San Vicente'>San Vicente</option>
                               <option class='form-control' value='Santa Ana'>Santa Ana</option>
                               <option class='form-control' value='Sonsonate'>Sonsonate</option>
                               <option class='form-control' value='Usulután'>Usulután</option>
                            </select>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='form-group'>
                            <label for='altura'>Ciudad</label>
                            <input type='text' onkeypress='return numerosyletras(event)'  name='ciuda' class='form-control' id='altura'>
                        </div>
                    </div>
            </div>
         

               <div class='row'>
                <div class='col-md-12'>
                    <div class='form-group'>
                        <label>Discapacida</label>
                        <textarea rows='5' name='Discapacida' class='form-control' onkeypress='return numerosyletras(event)' placeholder='Especifique la Alergias' style='resize: none;'></textarea>
                    </div>
                </div>
            </div>
                
               <button type='submit' value='".$idPaciente."' name='idPaciente1' class='btn btn-info btn-fill pull-right'>Crear Cuadro</button>
               <div class='clearfix'></div>
           </form>
       </div>
   </div>
</div>

</div>";
        
    }
    else{
        echo "<h1>ya tiene cuadro</h1>";
    }
}
   ?>