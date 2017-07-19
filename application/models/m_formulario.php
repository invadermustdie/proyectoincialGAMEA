<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 19/07/2017
 * Time: 04:11 PM
 */
class M_Formulario extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function guardarFormulario($param){
        // recupera los datos desde el controlador c_formulario
        $campos = array(
          'nomproy' => $param['nomProy']
        );

        $this->db->insert('tbl_proyectos', $campos);
        //se a añadido con exito en la bd
    }

}