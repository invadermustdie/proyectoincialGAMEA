<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 11/07/2017
 * Time: 04:24 PM
 */
class C_Reportes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->load->model('m_reportes');

    }
    public function index(){

        //esta llamada lista todos los proyectos que estan registrados
        $proyectos['registros'] = $this->m_reportes->listadoProyectosTodos();

        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('reportes/v_reportes',$proyectos);
        $this->load->view('plantillas/front_end/footer');

    }

}