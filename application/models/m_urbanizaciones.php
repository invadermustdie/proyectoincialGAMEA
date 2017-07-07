<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 07/07/2017
 * Time: 11:00 AM
 */
class M_Urbanizaciones extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all_urbanizaciones(){

        return $this->db->get('cat_urbanizaciones');

    }
}