<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 05/07/2017
 * Time: 11:00 AM
 */
class C_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->model('m_home');
        $this->load->database();

    }

    public function index(){
        //$this->load->view('v_home');
        redirect('c_home/view_users');
    }

    public function view_users(){

        $data['query'] = $this->m_home->get_all_users();

        $this->load->view('v_home', $data);
    }

}