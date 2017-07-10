<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 07/07/2017
 * Time: 02:09 PM
 */
class C_Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->helper('form');

        $this->load->model('m_users');
        $this->load->database();
    }

    public function index(){

        redirect('c_users/view_users');

    }

    public function view_users(){

        //echo "esta es la llamada  a la vista";
        $data['query'] = $this->m_users->get_all_users();

        $this->load->view('users/v_users', $data);

    }
    // esta es la funcion para la creacion de un nuevo usuario
    public function new_users(){

        //load support assets
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('', '<br/>');

        // set rules validation () definicion de las reglas de validacion
        $this->form_validation->set_rules('$id_usua', 'id_usua');
        $this->form_validation->set_rules('nombre_usua', 'nombre_usua');
        $this->form_validation->set_rules('apellidopat_usua', 'apellidopat_usua');
        $this->form_validation->set_rules('apellidomat_usua', 'apellidomat_usua');
        $this->form_validation->set_rules('fecha_cre_usua', 'fecha_cre_usua');
        $this->form_validation->set_rules('ci_usua', 'ci_usua');
        $this->form_validation->set_rules('cargo_usua', 'cargo_usua');
        $this->form_validation->set_rules('estado', 'estado', 'integer');

        // comienza la validacion de datos
        if($this->form_validation->run() == FALSE) {

            //first load , or problem with form
            $data['id_usua'] = array('name'=>'id_usua', 'id'=>'id_usua','value'=>set_value('id_usua',''));
            $data['nombre_usua'] = array('name' => 'nombre_usua', 'id' => 'nombre_usua', 'value' => set_value('nombre_usua', ''));
            $data['apellidopat_usua'] = array('name' => 'apellidopat_usau', 'id' => 'apellidopat_usua', 'value' => set_value('apellidopat_usua', ''));
            $data['apellidomat_usua'] = array('name' => 'apellidomat_usua', 'id' => 'apellidomat_usua', 'value' => set_value('apellidomat_usua', ''));
            $data['fecha_cre_usua'] = array('name' => 'fecha_cre_usua', 'id' => 'fecha_cre_usua', 'value' => set_value('fecha_cre_usua', ''));
            $data['ci_usua'] = array('name'=>'ci_usua', 'id'=>'ci_usua', 'value'=>set_value('ci_usua', ''));
            $data['cargo_usua'] = array('name'=>'cargo_usua', 'id'=>'cargo_usua', 'value' =>set_value('cargo_usua',''));
            $data['estado'] = array('name'=>'estado', 'id'=>'estado', 'value'=>set_value('estado',''));

            $this->load->view('users/v_new_users', $data);

        }else{

            // si pasa la validacion entonces hace esto:
            $data = array('id_usua'=>$this->input->post('id_usua'),
                          'nombre_usua'=> $this->input->post('nombre_usua'),
                          'apellidopat_usua' =>$this->input->post('apellidopat_usua'),
                          'apellidomat_usua' => $this->input->post('apellidomat_usua'),
                          'fecha_cre_usua' => $this->input->post('fecha_cre_usua'),
                          'ci_usua'=>$this->input->post('ci_usua'),
                          'cargo_usua'=>$this->input->post('cargo_usua'),
                          'estado'=>$this->input->post('estado')
            );
            if($this->m_users->process_create_users($data)){

                redirect('c_users');

            }
        }
    }
}




















































