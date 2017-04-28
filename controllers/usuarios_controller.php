<?php
require_once("models/usuarios_model.php");

$model = new usuarios_model();
$usuarios = $model->insert_usuario();

require_once("views/usuarios.php");
?>
