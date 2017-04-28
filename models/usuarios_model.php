<?php

/**
 *
 */
class usuarios_model
{
    private $db;
    private $usuarios;

    public function _construct()
    {
        $this->db = Conexion::conn();
        $this->usuarios = array();
    }

    public function get_usuarios()
    {
        $consulta = $this->db->query("SELECT * FROM usuarios;");

        while ($filas=$consulta->mysql_fetch_array())
        {
            $this->usuarios[]=$filas;
        }

        return $this->usuarios;
    }

    public function insert_usuario()
    {
        $consulta = $this->db->query("INSERT INTO usuarios(usuario,contrasena) VALUES('sdfsdf','12324569');");
        return $consulta;
    }

    public function edit_usuario($usuario, $contrasena, $id)
    {
        $consulta = $this->db->query("UPDATE usuarios SET usuario=(".$usuario."), contrasena=(".$contrasena.") WHERE id=".$id.";");
        return $consulta;
    }

    public function delete_usuario($id)
    {
        $consulta = $this->db->query("DELETE FROM usuarios WHERE id=".$id.";");
        return $consulta;
    }
}
?>
