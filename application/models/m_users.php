<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 07/07/2017
 * Time: 02:13 PM
 */
class M_Users extends CI_Model
{
    public function __construct()
    {

        parent::__construct();

    }

    public function get_all_users(){

        return $this->db->get('tbl_usuarios');

    }

    public function process_create_users($data){

        if($this->db->insert('tbl_usuarios', $data)){

            return true;

        }else{

            return false;

        }
    }
}