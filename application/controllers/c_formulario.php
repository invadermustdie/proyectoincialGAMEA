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

        // carga de la libreria para validar formularios
        $this->load->library('form_validation');

        // carga de el modelo para registro de formularios
        $this->load->model('m_formulario');

    }

    public function index()
    {
        $data['distritos'] = $this->m_formulario->getDistritos();

        $this->load->view('plantillas/front_end/header');
        $this->load->view('plantillas/front_end/sidebar');
        $this->load->view('formulario/v_formulario', $data);
        $this->load->view('plantillas/front_end/footer');

    }

//    public function registrarFormulario()
//    {
//        //esta funcion es la que registra el formulario de
//        // carga de datos desde v_formulario
//        $parametros['nomProy'] = $this->input->post('txtNomProy');
//        // aqui ise carga los otros parametros de la base
//
//        //llamada al modelo de registro de formulario
//        $this->m_formulario->guardarFormulario($parametros);
//        // aqui tendria aue hacer la verificacion si es que se registro con exito en la bd
//
//        // carga las vistas necesarias para mi formulario
//        $this->load->view('plantillas/front_end/header');
//        $this->load->view('plantillas/front_end/sidebar');
//        $this->load->view('formulario/v_formulario');
//        $this->load->view('plantillas/front_end/footer');
//    }

    // esta es la funcion que utilizo para elregistro de formulario
    public function registrarFormulario()
    {

        // reglas de validacion de formulario // nombredelcampodesdelavista, etiqueta, regla
        $this->form_validation->set_rules('txtNomProy', 'Nombre del proyecto', 'trim|required|strip_tags|xss_clean');
        $this->form_validation->set_rules('cmbDistrito', 'distrito', 'required');
        $this->form_validation->set_rules('cmbUrbanizacion', 'urbanizacion', 'required');
        $this->form_validation->set_rules('txtObjGral', 'Objetivo General', 'trim|required');
        $this->form_validation->set_rules('txtSitAct', 'Situacion Actual', 'trim|required');

        $this->form_validation->set_rules('checkDoc1', 'Carta', 'required');
        $this->form_validation->set_rules('checkDoc2', 'formulario tecnico', 'required');
        $this->form_validation->set_rules('checkDoc3', 'acta', 'required');
        $this->form_validation->set_rules('checkDoc4', 'planimetria', 'required');
        $this->form_validation->set_rules('checkDoc5', 'resolucion tecnica administrativa', 'required');
        $this->form_validation->set_rules('checkDoc6', 'plano zonificacion', 'required');

        $this->form_validation->set_rules('cmbClasificacion', 'clasificacion del proyecto', 'required');
        $this->form_validation->set_rules('cmbTipoProy', 'tipo de proyecto', 'required');
        $this->form_validation->set_rules('cmbOpcProy', 'Opciones de proyecto', 'required');
        $this->form_validation->set_rules('cmbBen', 'Beneficiarios', 'required');
        $this->form_validation->set_rules('txtCantBen', 'cantidad de beneficiarios', 'trim|required|is_natural_no_zero');
        $this->form_validation->set_rules('cmbMagnitud', 'magnitud del proyecto', 'required');
        $this->form_validation->set_rules('txtCantMag', 'cantidad de magnitud del proyecto', 'trim|required|numeric');
        $this->form_validation->set_rules('txtEjecutorPreInv', 'ejecutor de pre inversion', 'trim|required');
        $this->form_validation->set_rules('txtSupervisorPreInv', 'supervisor de pre inversion', 'trim|required');
        $this->form_validation->set_rules('txtFiscalPreInv', 'fiscal de pre inversion', 'trim|required');
        $this->form_validation->set_rules('txtPlazoPreInv', 'plazo estimado de pre inversion', 'trim|required|is_natural_no_zero');
        $this->form_validation->set_rules('txtEjecutorInv', 'ejecutor de inversion', 'trim|required');
        $this->form_validation->set_rules('txtSupervisorInv', 'supervisor de inversion', 'trim|required');
        $this->form_validation->set_rules('txtFiscalInv', 'fiscal de inversion', 'trim|required');
        $this->form_validation->set_rules('txtPlazoInv', 'plazo de inversion', 'trim|required|is_natural_no_zero');
        $this->form_validation->set_rules('txtConclusiones', 'conclusiones del proyecto', 'trim|required');
        $this->form_validation->set_rules('txtRecomendaciones', 'recomendaciones del proyecto', 'trim|required');

        //delimitacion de mensajes de errores en la vista
        $this->form_validation->set_error_delimiters('<span class="mensaje-error"><strong>', '</strong></span>');


        // aqui es donde se esta corriendo la validacion
        if ($this->form_validation->run() === false) {
            //vuelve a cargar el formulario y se muestran los errores
            $data['distritos'] = $this->m_formulario->getDistritos();

            $this->load->view('plantillas/front_end/header');
            $this->load->view('plantillas/front_end/sidebar');
            $this->load->view('formulario/v_formulario', $data);
            $this->load->view('plantillas/front_end/footer');

        } else {
            // se valido deforma correcta
            $data['distritos'] = $this->m_formulario->getDistritos();

            $this->load->view('plantillas/front_end/header');
            $this->load->view('plantillas/front_end/sidebar');
            $this->load->view('formulario/v_formulario', $data);
            $this->load->view('plantillas/front_end/footer');
        }
    }

    public function fillUrbanizacion()
    {
        $idDist = $this->input->post('idDistrito');

        echo '<script> alert("Id distrito desde el controlador "+'.$idDist.')</script>';

        if ($idDist) {

            $urb = $this->m_formulario->getUrbanizaciones($idDist);

            echo '<option value=" ">Seleccione una opcion</optionn>';

            foreach ($urb as $u) {

                echo '<option value="' . $u->id . '">' . $u->nombre_urb . '</option>';
            }

        } else {

            echo '<option value=" ">Seleccione una opcion</optionn>';

        }
    }
}


























