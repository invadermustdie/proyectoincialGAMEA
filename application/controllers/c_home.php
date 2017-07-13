<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 10/07/2017
 * Time: 04:09 PM
 */
class C_Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->model('m_home');
 //       $this->load->database();

    }

    public function index(){

        //creamos una variable en la cual alamecenamos la informacion que vamos a mostrar
        $data['usuarios'] = $this->m_home->listarUsuarios();

        // le mandamos a la vista el $data en la vista lo recvibe como "usuarios"
        //$this->load->view('home/v_home', $data);
        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('home/v_home',$data);
        $this->load->view('plantillas/front_end/footer');

    }


    public function detalleUsuario($id_usua){

        $id_usuario = $this->security->xss_clean($id_usua);// previene los ataques xss cross-site

        $datos['detalle']  = $this->m_home->detalleUsuario($id_usuario);

        // carga de la plantilla
        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('home/v_detalleUsuario',$datos);
        $this->load->view('plantillas/front_end/footer');

    }
}












