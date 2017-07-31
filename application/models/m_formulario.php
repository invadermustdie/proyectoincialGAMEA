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

    //consulta a la base de datos para utilizarlo en el jquery
//    public function getDistritos($est){
//
////        $est = array(
////
////          'id'=>$est['id']
////
////        );
//
//        $est = $this->db->get_where('cat_distritos',array('id_dist'=>$est));
//
//        //$distritos = $this->db->get_where('cat_distritos',$campos);
////        $this->db->select('*');
////        $this->db->from('cat_distritos');
////        $this->db->where("id", $campos);
////        $distritos = $this->db->get();
//
//        return $est->result();
//    }


    public function getDistritos(){

        $distritos = $this->db->get('cat_distritos');

        return $distritos->result();

    }


    public function getUrbanizaciones($idDist){

        $this->db->where('id_dist', $idDist);
        $urb =  $this->db->get('cat_urbanizaciones');

        return $urb->result();

    }

}









































