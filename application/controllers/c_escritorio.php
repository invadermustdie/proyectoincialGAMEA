<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 11/07/2017
 * Time: 04:19 PM
 */
class C_Escritorio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){

        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('escritorio/v_escritorio');
        $this->load->view('plantillas/front_end/footer');
    }

}