<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 11/07/2017
 * Time: 04:06 PM
 */
class C_Formulario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

    }

    public function index(){

        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('formulario/v_formulario');
        $this->load->view('plantillas/front_end/footer');
    }

}