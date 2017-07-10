<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 10/07/2017
 * Time: 04:29 PM
 */
class M_Home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function listarUsuarios(){

        $consulta = $this->db->get('tbl_usuarios');

        return $consulta->result();

    }


    // esta consulat muestra el detalle de un usuario buscando por ID
    function detalleUsuario($idusua){
        $this->db->where('id_usua', $idusua);
        $consulta = $this->db->get('tbl_usuarios');
        return $consulta->row();

    }

}