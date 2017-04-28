<?php

class Conexion
{
    public static function conn()
    {
        $conexion = new mysqli("localhost", "root", "", "misitioweb");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

// // Conectando, seleccionando la base de datos
// $link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
// mysql_select_db('misitioweb') or die('No se pudo seleccionar la base de datos');
// echo 'Connected successfully';

// Realizar una consulta MySQL
// $insert = 'INSERT INTO usuarios (usuario, contrasena) VALUES ("noche", "123456")';
// $insert_result = mysql_query($insert) or die('Consulta fallida: ' . mysql_error());

// $delete = 'DELETE FROM usuarios WHERE usuario="gerson"';
// $delete_result = mysql_query($delete) or die('Consulta fallida: ' . mysql_error());

// $update = 'UPDATE usuarios SET usuario = "maritza" WHERE id=2';
// $update_result = mysql_query($update) or die('Consulta fallida: ' . mysql_error());

// $select = 'SELECT * FROM usuarios';
// $select_result = mysql_query($select) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
// echo "<table>\n";
// while ($line = mysql_fetch_array($select_result, MYSQL_ASSOC)) {
//     echo "\t<tr>\n";
//     foreach ($line as $col_value) {
//         echo "\t\t<td>$col_value</td>\n";
//     }
//     echo "\t</tr>\n";
// }
// echo "</table>\n";
//
// // Liberar resultados
// mysql_free_result($select_result);

// Cerrar la conexión
// mysql_close($link);
?>
