<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Blank Page</h1>
            <?php
            foreach ($usuarios as $item):
                // creamos una url para que se asocie a la v_detalleUsuario
                $url = 'home/'.$item->id_usua;
                ?>
                <h3><?php echo anchor($url,$item->id_usua) ?></h3>
                <p><?php echo $item->nombre_usua; ?></p>
                <p><?php echo $item->apellidopat_usua; ?></p>
                <p><?php echo $item->apellidomat_usua; ?></p>
                <p><?php echo $item->ci_usua; ?></p>
                <p><?php echo $item->cargo_usua; ?></p>
                <?php
            endforeach;
            ?>

        </div>
        <!--End Page Header -->
    </div>
</div>
<!-- end page-wrapper -->
