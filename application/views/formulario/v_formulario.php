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
                            <input type="text" name="txtNomProy" class="form-control">
                            <p class="help-block">Aqui va el Nombre del proyecto.</p>
                            <div class="form-group">
                                <label>Distrito</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <p class="help-block">Escoja su distrito.</p>
                            <div class="form-group">
                                <label>Urbanizacion</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <p class="help-block">Escoja su urbanizaci&oacuten.</p>

                            <div class="form-group">
                                <label>Objetivo General</label>
                                <textarea class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Situacion Actual</label>
                                <textarea class="form-control"></textarea>
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
                                    <input type="checkbox" value="">CARTA DE SOLICITUD
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">FORMULARIO TÉCNICO VECINAL
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">ACTA DE ASAMBLEA
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">PLANIMETRÍA APROBADA
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">RESOLUCIÓN TÉCNICA ADMINISTRATIVA
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">PLANO DE ZONIFICACIÓN APROBADO
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Clasificación del proyecto</label>
                            <select class="form-control">
                                <option>TIPO I/ PROYECTOS DE DESARROLLO RURAL</option>
                                <option>TIPO II / PROYECTOS DE APOYO AL DESARROLLO PRODUCTIVO</option>
                                <option>TIPO III / PROYECTOS DE DESARROLLO SOCIAL</option>
                                <option>TIPO IV / PROYECTOS DE FORTALECIMIENTO INSTITUCIONAL</option>
                                <option>TIPO V / PROYECTOS DE INVERSIÓN Y DESARROLLO TECNOLÓGICO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tipo de proyecto</label>
                            <select class="form-control">
                                <option>APOYO A LA PRODUCCIÓN</option>
                                <option> DEPORTE</option>
                                <option> EQUIPAMIENTO URBANO</option>
                                <option> EDUCACIÓN</option>
                                <option> VÍAS</option>
                                <option> SANEAMIENTO BÁSICO</option>
                                <option> SEGURIDAD CIUDADANA</option>
                                <option> SALUD</option>
                                <option> TRANSPORTE</option>
                                <option> INSTITUCIONAL</option>
                                <option> CULTURA</option>
                                <option> GESTIÓN SOCIAL</option>
                                <option> RIESGOS</option>
                                <option> OTROS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Opciones de proyecto</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>OTROS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control"></textarea>
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
                            <select class="form-control">
                                <option>Habitantes</option>
                                <option>Estudiantes</option>
                                <option>Juntas Vecinales</option>
                                <option>Junta Escolar</option>
                                <option>Otros</option>
                            </select>
                            <label>Cantidad</label>
                            <input class="form-control">
                        </div>
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
                            <select class="form-control">
                                <option>Metros (M)</option>
                                <option>Metros lineales (ML)</option>
                                <option>Metros cuadrados (M2)</option>
                                <option>Otros</option>
                            </select>
                            <label>Cantidad</label>
                            <input class="form-control">
                        </div>
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
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>SUPERVISOR</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>FISCAL</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>PLAZO ESTIMADO</label>
                            <input class="form-control">
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
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>SUPERVISOR</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>FISCAL</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>PLAZO ESTIMADO</label>
                            <input class="form-control">
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
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Recomendaciones</label>
                            <textarea class="form-control"></textarea>
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

