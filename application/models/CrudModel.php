<?php
class CrudModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($user, $pwd, $rol)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('NOMBRE', $user);
        $this->db->where('PASSWORD', $pwd);
        $this->db->where('ROL', $rol);

        $consulta = $this->db->get();
        $arrayDatos = $consulta->row();

        if(empty($arrayDatos))
        {
            return FALSE;
        }

        return $arrayDatos;
    }

}