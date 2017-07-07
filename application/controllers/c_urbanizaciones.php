<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 07/07/2017
 * Time: 10:43 AM
 */
class C_Urbanizaciones extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();

       $this->load->helper('url');
       $this->load->helper('form');
       $this->load->helper('security');

       $this->load->model('m_urbanizaciones');
       $this->load->database();

    }

    public function index(){
        // esta es la direccion logica de mi vista
        redirect('c_urbanizaciones/view_urbanizaciones');

    }
    public function view_urbanizaciones(){

        $data['query'] = $this->m_urbanizaciones->get_all_urbanizaciones();

        // esta es la direccion fisica de mi vista
        $this->load->view('urbanizaciones/v_urbanizaciones', $data);
    }
}