<?php

session_start();
var_dump($_SESSION["usarioActivo"]);
// session_destroy();
?>

UPDATE
  salud360
SET
  usuario = 'usuario',
  nombreCompleto = 'nombreCompleto',
  correo = 'correo',
  passw = 'passw',
  tipo = 'tipo',
  foto = 'foto'
WHERE id_usuario = 'id_usuario'