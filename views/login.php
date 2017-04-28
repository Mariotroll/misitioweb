<?php

$mysql_conn = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('misitioweb') or die('No se pudo seleccionar la base de datos');

$select = 'SELECT * FROM usuarios WHERE usuario = "' . $_POST['usuario'] . '" AND contrasena = "' . $_POST['contrasena'] . '"';
$select_result = mysql_query($select) or die('Consulta fallida: ' . mysql_error());
$data = mysql_fetch_array($select_result, MYSQL_ASSOC);

if (empty($data))
    echo "Usuario inexistente";
else
    echo "Bienvenido a Rocklife by Mario López :)";

mysql_close($mysql_conn);

?>
