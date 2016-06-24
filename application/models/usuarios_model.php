<?php

class usuarios_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function check_user($user) {
        $this->db->select('usuario, password, tbl_clientes_user.id, tbl_clientes_user.nombre, tbl_clientes.nombre as nombre_empresa, apellido, tipo, tbl_clientes_user.id_clientes')->where('usuario', $user);
        $this->db->from('tbl_clientes_user');
        $this->db->join('tbl_clientes', 'tbl_clientes.id = tbl_clientes_user.id_clientes');
        $consulta = $this->db->get();
        
        if($consulta->num_rows() == 1) {
            return $consulta->result();
        } else {
            return FALSE;
        }
            
    }
}