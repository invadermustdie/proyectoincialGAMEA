<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 05/07/2017
 * Time: 11:35 AM
 */
class M_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all_users(){

        return $this->db->get('users');

    }

}