<html>
<head>
    <title>Pagina de Inicio</title>
</head>
<body>

<h1>Esta es la primera pagina del sistema</h1>
<p>Esta es una pagina creada por : <h4><?php
    echo MICONSTANTE;
    ?></h4>
</p>
<?php
foreach ($usuarios as $item):
    // creamos una url para que se asocie a la v_detalleUsuario
    $url = 'home/'.$item->id_usua.'/'.$item->nombre_usua;

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

</body>
</html>