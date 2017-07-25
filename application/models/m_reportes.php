<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 24/07/2017
 * Time: 03:45 PM
 */
class M_Reportes extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function listadoProyectosTodos()
    {
        // aqui se hace la consulata para lsitar todos los proyectos
        //aqui le solicitamos un query a la bd
        //$miConsulta = "select nombreproyecto, distrito, urbanizacion, objcentral, categorizacion, tipoproy, sector, alcance, monto from t_proyecto order by fecha, distrito;";
        $miConsulta = "select * from t_proyecto order by distrito, fecha;";

        $query = $this->db->query($miConsulta);
        return $query->result();
    }

}