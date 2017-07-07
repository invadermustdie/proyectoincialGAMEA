<html>
<head>
    <title>Panel Vista de Urbanizaciones</title>
</head>
<body>
<h1>Esta es mi vista de urbanizaciones</h1>
<p>Control de acceso a la base de datos</p>
<?php
if ($query->num_rows() > 0):
    ?>
    <table border="1">
        <tr>
            <td>id_urb</td>
            <td>id_dist</td>
            <td>nombre_urb</td>
            <td>fecha_reg</td>
            <td>estado</td>
            <td colspan="2">acciones</td>
        </tr>
        <?php
        foreach ($query->result() as $row):
            ?>
            <tr>
                <td><?php echo $row->id_urb; ?></td>
                <td><?php echo $row->id_dist; ?></td>
                <td><?php echo $row->nombre_urb; ?></td>
                <td><?php echo $row->fecha_reg_urb; ?></td>
                <td><?php echo $row->estado_urb; ?></td>
                <td><?php echo anchor('urbanizaciones/edit_urbanizacion/' . $row->id, 'Editar'); ?></td>
                <td><?php echo anchor('urbanizaciones/delete_urbanizacion/' . $row->id, 'Borrar'); ?></td>
            </tr>
            <?php
        endforeach;
        ?>
    </table>
    <?php
endif;
?>
</body>
</html>