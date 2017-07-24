<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Reportes</h1>
            <div class="row">
            </div>
        </div>
        <!--End Page Header -->
    </div>
    <div class="col-lg-12">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Distrito</th>
                    <th>Urbanizacion</th>
                    <th>Objetivo</th>
                    <th>Categorizacion</th>
                    <th>Tipo</th>
                    <th>Sector</th>
                    <th>Alcance</th>
                    <th>Monto</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($registros  as $cod):
                    ?>
                    <tr>
                        <td><?php echo($cod->nombreproyecto); ?></td>
                        <td> <?php echo($cod->distrito); ?></td>
                        <td> <?php echo($cod->urbanizacion); ?></td>
                        <td> <?php echo($cod->objcentral); ?></td>
                        <td> <?php echo($cod->categorizacion); ?></td>
                        <td> <?php echo($cod->tipoproy); ?></td>
                        <td> <?php echo($cod->sector); ?></td>
                        <td> <?php echo($cod->alcance); ?></td>
                        <td> <?php echo($cod->monto); ?></td>
                    </tr>
                    <?php
                endforeach
                ?>
                </tbody>
            </table>
            <!-- /.table-responsive -->
        </div>
    </div>

</div>
<!-- end page-wrapper -->
