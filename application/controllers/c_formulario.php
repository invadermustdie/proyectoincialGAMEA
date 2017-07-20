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

        // carga de el modelo para registro de formularios
        $this->load->model('m_formulario');

    }

    public function index()
    {

        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('formulario/v_formulario');
        $this->load->view('plantillas/front_end/footer');

    }

    public function registrarFormulario()
    {
        //esta funcion es la que registra el formulario de
        // carga de datos desde v_formulario
        $parametros['nomProy'] = $this->input->post('txtNomProy');
        // aqui ise carga los otros parametros de la base

        //llamada al modelo de registro de formulario
        $this->m_formulario->guardarFormulario($parametros);
        // aqui tendria aue hacer la verificacion si es que se registro con exito en la bd

        // carga las vistas necesarias para mi formulario
        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('formulario/v_formulario');
        $this->load->view('plantillas/front_end/footer');
    }

    // esta funcion sera la que llama los distritos para la vista de mi controlador
    public function getDistritos()
    {
        // parametro con el que esta buscando en el jquery
        $est = $this->input->post('id');
        // consulta a la base para ese parametro
        $resultado = $this->m_formulario->getDistritos($est);

        // decodifica a json
        echo json_encode($resultado);
    }

}


























