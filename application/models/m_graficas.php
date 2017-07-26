<?php

/**
 * Created by PhpStorm.
 * User: Lucio
 * Date: 26/07/2017
 * Time: 11:58 AM
 */
class M_Graficas extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDistrito(){

        $miConsulta = "select urbanizacion , impactosocial from t_proyecto where distrito ='1';";

        $query = $this->db->query($miConsulta);

        return $query->result();
    }

}