<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 26/07/2017
 * Time: 11:53 AM
 */
class C_Graficas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        // carga de el modelo para registro de formularios
        $this->load->model('m_graficas');
    }

    public function getDistrito(){

        $result = $this->m_graficas->getDistrito();

        echo json_encode($result);
    }


}