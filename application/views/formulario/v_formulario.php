<!--<!--suppress ALL -->-->
<script src="<?php echo base_url(); ?>assets/plugins/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#cmbDistrito").change(function () {

            $("#cmbDistrito option:selected").each(function () {

                idDistrito = $('#cmbDistrito').val();

                //alert(idDistrito);

                $.post("<?php echo base_url();?>c_formulario/fillUrbanizacion",{
                    idDistrito : idDistrito
                },function (data) {
                    $("#cmbUrbanizacion").html(data);
                });
            });
        });
    });
</script>

<!--  page-wrapper -->
<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">
                Llenar formulario ITCP
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> Datos generales del proyecto
                </li>
            </ol>
        </div>
    </div>

    <form role="form" action="<?php echo base_url(); ?>c_formulario/registrarFormulario" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nombre del Proyecto</label>
                            <input type="text" name="txtNomProy" id="txtNomProy" class="form-control"
                                   value="<?php echo set_value('txtNomProy'); ?>">
                            <?php echo form_error('txtNomProy'); ?>
                            <p class="help-block">Aqui va el Nombre del proyecto.</p>

                            <div class="form-group">
                                <label>Distrito</label>

                                <select class="form-control" id="cmbDistrito" name="cmbDistrito">
                                    <option value="">Seleccione una opcion</option>
                                    <?php
                                    foreach ($distritos as $dist) {
                                        echo '<option value="' . $dist->id_dist . '">' . $dist->nombre_dist . '</option>';
                                    };
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Urbanizacion</label>

                                <select class="form-control" id="cmbUrbanizacion" name="cmbUrbanizacion">
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Objetivo General</label>
                                <textarea class="form-control" id="txtObjGral"
                                          name="txtObjGral"><?php echo set_value('txtObjGral'); ?></textarea>
                                <?php echo form_error('txtObjGral'); ?>
                            </div>

                            <div class="form-group">
                                <label>Situacion Actual</label>
                                <textarea class="form-control" id="txtSitAct"
                                          name="txtSitAct"><?php echo set_value('txtSitAct'); ?></textarea>
                                <?php echo form_error('txtSitAct'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Documentación Presentada</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkDoc1" id="carta"
                                           value="1" <?php echo set_checkbox('checkDoc1', '1') ?>>CARTA DE SOLICITUD
                                </label>
                                <?php echo form_error('checkDoc1'); ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkDoc2" id="formulario"
                                           value="2" <?php echo set_checkbox('checkDoc2', '2') ?>>FORMULARIO TÉCNICO
                                    VECINAL
                                </label>
                                <?php echo form_error('checkDoc2'); ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkDoc3" id="acta"
                                           value="3" <?php echo set_checkbox('checkDoc3', '3') ?>>ACTA DE ASAMBLEA
                                </label>
                                <?php echo form_error('checkDoc3'); ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkDoc4" id="planimetria"
                                           value="4" <?php echo set_checkbox('checkDoc4', '4') ?>>PLANIMETRÍA APROBADA
                                </label>
                                <?php echo form_error('checkDoc4'); ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkDoc5" id="resolucion"
                                           value="5" <?php echo set_checkbox('checkDoc5', '5') ?>>RESOLUCIÓN TÉCNICA
                                    ADMINISTRATIVA
                                </label>
                                <?php echo form_error('checkDoc5'); ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkDoc6" id="plano"
                                           value="6" <?php echo set_checkbox('checkDoc6', '6') ?>>PLANO DE ZONIFICACIÓN
                                    APROBADO
                                </label>
                                <?php echo form_error('checkDoc6'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Clasificación del proyecto</label>
                            <select class="form-control" id="cmbClasificacion" name="cmbClasificacion">
                                <option value=" ">Seleccione un valor</option>
                                <option value="1" <?php echo set_select('cmbClasificacion', '1'); ?>>TIPO I/ PROYECTOS
                                    DE DESARROLLO RURAL
                                </option>
                                <option value="2" <?php echo set_select('cmbClasificacion', '2'); ?>>TIPO II / PROYECTOS
                                    DE APOYO AL DESARROLLO PRODUCTIVO
                                </option>
                                <option value="3" <?php echo set_select('cmbClasificacion', '3'); ?>>TIPO III /
                                    PROYECTOS DE DESARROLLO SOCIAL
                                </option>
                                <option value="4" <?php echo set_select('cmbClasificacion', '4'); ?>>TIPO IV / PROYECTOS
                                    DE FORTALECIMIENTO INSTITUCIONAL
                                </option>
                                <option value="5" <?php echo set_select('cmbClasificacion', '5'); ?>>TIPO V / PROYECTOS
                                    DE INVERSIÓN Y DESARROLLO TECNOLÓGICO
                                </option>
                            </select>
                            <?php echo form_error('cmbClasificacion'); ?>
                        </div>
                        <div class="form-group">
                            <label>Tipo de proyecto</label>
                            <select class="form-control" id="cmbTipoProy" name="cmbTipoProy">
                                <option value=" ">Seleccione una opcion</option>
                                <option value="1" <?php echo set_select('cmbTipoProy', '1'); ?>>APOYO A LA PRODUCCIÓN
                                </option>
                                <option value="2" <?php echo set_select('cmbTipoProy', '2'); ?>> DEPORTE</option>
                                <option value="3" <?php echo set_select('cmbTipoProy', '3'); ?>> EQUIPAMIENTO URBANO
                                </option>
                                <option value="4" <?php echo set_select('cmbTipoProy', '4'); ?>> EDUCACIÓN</option>
                                <option value="5" <?php echo set_select('cmbTipoProy', '5'); ?>> VÍAS</option>
                                <option value="6" <?php echo set_select('cmbTipoProy', '6'); ?>> SANEAMIENTO BÁSICO
                                </option>
                                <option value="7" <?php echo set_select('cmbTipoProy', '7'); ?>> SEGURIDAD CIUDADANA
                                </option>
                                <option value="8" <?php echo set_select('cmbTipoProy', '8'); ?>> SALUD</option>
                                <option value="9" <?php echo set_select('cmbTipoProy', '9'); ?>> TRANSPORTE</option>
                                <option value="10" <?php echo set_select('cmbTipoProy', '10'); ?>> INSTITUCIONAL
                                </option>
                                <option value="11" <?php echo set_select('cmbTipoProy', '11'); ?>> CULTURA</option>
                                <option value="12" <?php echo set_select('cmbTipoProy', '12'); ?>> GESTIÓN SOCIAL
                                </option>
                                <option value="13" <?php echo set_select('cmbTipoProy', '13'); ?>> RIESGOS</option>
                                <option value="14" <?php echo set_select('cmbTipoProy', '14'); ?>> OTROS</option>
                            </select>
                            <?php echo form_error('cmbTipoProy'); ?>
                        </div>
                        <div class="form-group">
                            <label>Opciones de proyecto</label>
                            <select class="form-control" id="cmbOpcProy" name="cmbOpcProy">
                                <option value=" ">Seleccione una opcion</option>
                                <option value="1" <?php echo set_select('cmbOpcProy', '1'); ?>>1</option>
                                <option value="2" <?php echo set_select('cmbOpcProy', '2'); ?>>2</option>
                                <option value="3" <?php echo set_select('cmbOpcProy', '3'); ?>>3</option>
                                <option value="4" <?php echo set_select('cmbOpcProy', '4'); ?>>4</option>
                                <option value="5" <?php echo set_select('cmbOpcProy', '5'); ?>>5</option>
                                <option value="6" <?php echo set_select('cmbOpcProy', '6'); ?>>6</option>
                                <option value="7" <?php echo set_select('cmbOpcProy', '7'); ?>>OTROS</option>
                            </select>
                            <?php echo form_error('cmbOpcProy'); ?>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" id="txtObsDocu" name="txtObsDoc"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- seccion de Alcance y beneficiarios del proyecto -->
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> Alcance y beneficiarios del proyecto
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Beneficiarios</label>
                            <select class="form-control" id="cmbBen" name="cmbBen">
                                <option value=" ">Seleccione una opcion</option>
                                <option value="1" <?php echo set_select('cmbBen', '1'); ?>>Habitantes</option>
                                <option value="2" <?php echo set_select('cmbBen', '2'); ?>>Estudiantes</option>
                                <option value="3" <?php echo set_select('cmbBen', '3'); ?>>Juntas Vecinales</option>
                                <option value="4" <?php echo set_select('cmbBen', '4'); ?>>Junta Escolar</option>
                                <option value="5" <?php echo set_select('cmbBen', '5'); ?>>Otros</option>
                            </select>
                            <?php echo form_error('cmbBen'); ?>
                        </div>
                        <label>Cantidad</label>
                        <input class="form-control" name="txtCantBen" id="txtCantBen"
                               value="<?php echo set_value('txtCantBen'); ?>">
                        <?php echo form_error('txtCantBen'); ?>

                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Magnitud del proyecto</label>
                            <select class="form-control" id="cmbMagnitud" name="cmbMagnitud">
                                <option value=" ">Seleccione una opcion</option>
                                <option value="1" <?php echo set_select('cmbMagnitud', '1'); ?>>Metros (M)</option>
                                <option value="2" <?php echo set_select('cmbMagnitud', '2'); ?>>Metros lineales (ML)
                                </option>
                                <option value="3" <?php echo set_select('cmbMagnitud', '3'); ?>>Metros cuadrados (M2)
                                </option>
                                <option value="4" <?php echo set_select('cmbMagnitud', '4'); ?>>Otros</option>
                            </select>
                            <?php echo form_error('cmbMagnitud'); ?>
                        </div>
                        <label>Cantidad</label>
                        <input class="form-control" name="txtCantMag" id="txtCantMag"
                               value="<?php echo set_value('txtCantMag'); ?>">
                        <?php echo form_error('txtCantMag'); ?>

                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- seccion de financiamiento y plazos -->
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> Financiamiento del proyecto y plazos establecidos
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <strong>PRE INVERSIÓN</strong>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>EJECUTOR</label>
                            <input class="form-control" name="txtEjecutorPreInv" id="txtEjecutorPreInv"
                                   value="<?php echo set_value('txtEjecutorPreInv'); ?>">
                            <?php echo form_error('txtEjecutorPreInv'); ?>
                        </div>
                        <div class="form-group">
                            <label>SUPERVISOR</label>
                            <input class="form-control" name="txtSupervisorPreInv" id="txtSupervisorPreInv"
                                   value="<?php echo set_value('txtSupervisorPreInv'); ?>">
                            <?php echo form_error('txtSupervisorPreInv'); ?>
                        </div>
                        <div class="form-group">
                            <label>FISCAL</label>
                            <input class="form-control" name="txtFiscalPreInv" id="txtFiscalPreInv"
                                   value="<?php echo set_value('txtFiscalPreInv'); ?>">
                            <?php echo form_error('txtFIscalPreInv'); ?>
                        </div>
                        <div class="form-group">
                            <label>PLAZO ESTIMADO</label>
                            <input class="form-control" name="txtPlazoPreInv" id="txtPlazoPreInv"
                                   value="<?php echo set_value('txtPlazoPreInv'); ?>">
                            <?php echo form_error('txtPlazoPreInv'); ?>
                            <p class="help-block">El plazo estimado debe de estar en <strong>dias
                                    calendario</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <strong>INVERSIÓN</strong>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>EJECUTOR</label>
                            <input class="form-control" name="txtEjecutorInv" id="txtEjecutorInv"
                                   value="<?php echo set_value('txtEjecutorInv'); ?>">
                            <?php echo form_error('txtEjecutorInv'); ?>
                        </div>
                        <div class="form-group">
                            <label>SUPERVISOR</label>
                            <input class="form-control" name="txtSupervisorInv" id="txtSupervisorInv"
                                   value="<?php echo set_value('txtSupervisorInv'); ?>">
                            <?php echo form_error('txtSupervisorInv'); ?>
                        </div>
                        <div class="form-group">
                            <label>FISCAL</label>
                            <input class="form-control" name="txtFiscalInv" id="txtFiscalInv"
                                   value="<?php echo set_value('txtFiscalInv'); ?>">
                            <?php echo form_error('txtFiscalInv'); ?>
                        </div>
                        <div class="form-group">
                            <label>PLAZO ESTIMADO</label>
                            <input class="form-control" name="txtPlazoInv" id="txtPlazoInv"
                                   value="<?php echo set_value('txtPlazoInv'); ?>">
                            <?php echo form_error('txtPlazoInv'); ?>
                            <p class="help-block">El plazo estimado debe de estar en <strong>dias
                                    calendario</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ESTRUCTURA DE FINANCIAMIENTO - PRE INVERSIÓN
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th><strong>FUENTE</strong></th>
                                        <th><strong>Bs.-</strong></th>
                                        <th><strong>Procentaje (%)</strong></th>
                                        <th><strong>Añadir</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control">
                                                <option>Fuente de financiamiento 1</option>
                                                <option>Fuente de financiamiento 2</option>
                                                <option>Fuente de financiamiento 3</option>
                                                <option>Fuente de financiamiento 4</option>
                                                <option>Fuente de financiamiento 5</option>
                                                <option>Fuente de financiamiento 6</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="form-control">
                                        </td>
                                        <td>
                                            <input class="form-control">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-circle"><i
                                                        class="fa fa-caret-down"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ESTRUCTURA DE FINANCIAMIENTO - INVERSIÓN
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th><strong>FUENTE</strong></th>
                                        <th><strong>Bs.-</strong></th>
                                        <th><strong>Procentaje (%)</strong></th>
                                        <th><strong>Añadir</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control">
                                                <option>Fuente de financiamiento 1</option>
                                                <option>Fuente de financiamiento 2</option>
                                                <option>Fuente de financiamiento 3</option>
                                                <option>Fuente de financiamiento 4</option>
                                                <option>Fuente de financiamiento 5</option>
                                                <option>Fuente de financiamiento 6</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="form-control">
                                        </td>
                                        <td>
                                            <input class="form-control">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-circle"><i
                                                        class="fa fa-caret-down"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- seccion de conclusiones y recomendaciones -->
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> Conclusiones y recomendaciones
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Conclusiones</label>
                            <textarea class="form-control" id="txtConclusiones"
                                      name="txtConclusiones"><?php echo set_value('txtConclusiones') ?></textarea>
                            <?php echo form_error('txtConclusiones'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Recomendaciones</label>
                            <textarea class="form-control" id="txtRecomendaciones"
                                      name="txtRecomendaciones"><?php echo set_value('txtRecomendaciones') ?></textarea>
                            <?php echo form_error('txtRecomendaciones'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- seccion de cocsolidacion de la informacion generacion de codigo IPCT registrar fechas de elabaoracion  y registro de usuario que elabora -->

        <!-- seccion de conclusiones y recomendaciones -->
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-upload"></i>
                        FINALIZAR PROCESO DE LLENADO DE FORMULARIO TÉCNICO DE CONDICIONES PREVIAS
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <input type="submit" name="guardar"
                               value="REGISTRAR INFORME TÉCNICO DE CONDICIONES PREVIAS (ITCP)"
                               class="btn btn-primary btn-lg btn-block">
                    </div>
                </div>
            </div>
        </div>

    </form>

</div>


<!-- parametro para mi distrito.js -->
<script type="text/javascript">

    var baseurl = "<?php echo base_url(); ?>";

</script>