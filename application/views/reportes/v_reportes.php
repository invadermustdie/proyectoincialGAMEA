<!--  page-wrapper -->
<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">
               Reporte de Proyectos
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> Tabla de proyectos registrados
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>CodSIMPU</th>
                            <th>fecha</th>
                            <th>nombreproyecto</th>
                            <th>distrito</th>
                            <th>urbanizacion</th>
                            <th>objcentral</th>
                            <th>situacionactual</th>
                            <th>docpresentada</th>
                            <th>categorizacion</th>
                            <th>coddp</th>
                            <th>tipoproy</th>
                            <th>sector</th>
                            <th>alcance</th>
                            <th>compromiso</th>
                            <th>derechoprop</th>
                            <th>catambiental</th>
                            <th>unidad</th>
                            <th>cantidad</th>
                            <th>cantidad2</th>
                            <th>unidad2</th>
                            <th>gestion</th>
                            <th>fuente</th>
                            <th>monto</th>
                            <th>estudio</th>
                            <th>supervision</th>
                            <th>unidadejecutora</th>
                            <th>poblacionben</th>
                            <th>relneceprio</th>
                            <th>impactosocial</th>
                            <th>tiempoestudio</th>
                            <th>tramite</th>
                            <th>inicioobra</th>
                            <th>conclusionobra</th>
                            <th>tiempototal</th>
                            <th>conclusion</th>
                            <th>recomendacion</th>
                            <th>elaboradopor</th>
                            <th>obs</th>
                            <th>fechaapro</th>
                            <th>codigoapro</th>
                            <th>aprobacion</th>
                            <th>recomendacionfinal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($registros as $cod): ?>
                            <tr>
                                <td><?php echo($cod->codsimpu); ?></td>
                                <td><?php echo($cod->fecha); ?></td>
                                <td><?php echo($cod->nombreproyecto); ?></td>
                                <td><?php echo($cod->distrito); ?></td>
                                <td><?php echo($cod->urbanizacion); ?></td>
                                <td><?php echo($cod->objcentral); ?></td>
                                <td><?php echo($cod->situacionactual); ?></td>
                                <td><?php echo($cod->docpresentada); ?></td>
                                <td><?php echo($cod->categorizacion); ?></td>
                                <td><?php echo($cod->coddp); ?></td>
                                <td><?php echo($cod->tipoproy); ?></td>
                                <td><?php echo($cod->sector); ?></td>
                                <td><?php echo($cod->alcance); ?></td>
                                <td><?php echo($cod->compromiso); ?></td>
                                <td><?php echo($cod->derechoprop); ?></td>
                                <td><?php echo($cod->catambiental); ?></td>
                                <td><?php echo($cod->unidad); ?></td>
                                <td><?php echo($cod->cantidad); ?></td>
                                <td><?php echo($cod->cantidad2); ?></td>
                                <td><?php echo($cod->unidad2); ?></td>
                                <td><?php echo($cod->gestion); ?></td>
                                <td><?php echo($cod->fuente); ?></td>
                                <td><?php echo($cod->monto); ?></td>
                                <td><?php echo($cod->estudio); ?></td>
                                <td><?php echo($cod->supervision); ?></td>
                                <td><?php echo($cod->unidadejecutora); ?></td>
                                <td><?php echo($cod->poblacionben); ?></td>
                                <td><?php echo($cod->relneceprio); ?></td>
                                <td><?php echo($cod->impactosocial); ?></td>
                                <td><?php echo($cod->tiempoestudio); ?></td>
                                <td><?php echo($cod->tramite); ?></td>
                                <td><?php echo($cod->inicioobra); ?></td>
                                <td><?php echo($cod->conclusionobra); ?></td>
                                <td><?php echo($cod->tiempototal); ?></td>
                                <td><?php echo($cod->conclusion); ?></td>
                                <td><?php echo($cod->recomendacion); ?></td>
                                <td><?php echo($cod->elaboradopor); ?></td>
                                <td><?php echo($cod->obs); ?></td>
                                <td><?php echo($cod->fechaapro); ?></td>
                                <td><?php echo($cod->codigoapro); ?></td>
                                <td><?php echo($cod->aprobacion); ?></td>
                                <td><?php echo($cod->recomendacionfinal); ?></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

