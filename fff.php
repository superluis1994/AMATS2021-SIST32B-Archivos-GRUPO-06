<div class='col-md-8'>
        <div class='card'>
            <div class='header'>
                <h4 class='title'>Crear Cuadro</h4>
            </div>
            <div class='content'>
                <form>
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Usuario</label>
                                <input type='text' class='form-control' placeholder='Username' value='<?php echo $rowsss['usuario'] ?>'>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label for='pass'>Contraseña</label>
                                <input type='text' value='<?php echo $rowsss['passw'] ?>' class='form-control' id='pass'>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label for='exampleInputEmail1'>Foto</label>
                                <input type='file'  class='form-control'>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label for='exampleInputEmail1'>Correo</label>
                                <input type='email' value='<?php echo $rowsss['correo'] ?>' class='form-control' placeholder='Email'>
                            </div>
                        </div>
                        <div class='col-md-8'>
                            <div class='form-group'>
                                <label>Nombre Completo</label>
                                <input type='text' class='form-control' value='<?php echo $rowsss['nombreCompleto'] ?>' placeholder='Company' value='Mike'>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>Address</label>
                                <input type='text' class='form-control' placeholder='Home Address' value='Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09'>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>City</label>
                                <input type='text' class='form-control' placeholder='City' value='Mike'>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Country</label>
                                <input type='text' class='form-control' placeholder='Country' value='Andrew'>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Postal Code</label>
                                <input type='number' class='form-control' placeholder='ZIP Code'>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>About Me</label>
                                <textarea rows='5' class='form-control' placeholder='Here can be your description' value='Mike'>Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                            </div>
                        </div>
                    </div>

                    <button type='submit' class='btn btn-info btn-fill pull-right'>Update Profile</button>
                    <div class='clearfix'></div>
                </form>
            </div>
        </div>
    </div>

</div>