<html>
<head>
    <title>Vista de usuarios</title>
</head>
<body>
<h1>Esta es mi vista princiapl de usuarios</h1>
<?php
if ($query->num_rows() > 0):
    ?>
    <table border="1">
        <tr>
            <td>id_usuario</td>
            <td>nombre</td>
            <td>ap. paterno</td>
            <td>ap. materno</td>
            <td>fecha creacion</td>
            <td>C.I.</td>
            <td>cargo</td>
            <td>estado</td>
            <td colspan="2">acciones</td>
        </tr>
        <?php
        foreach ($query->result() as $row):
            ?>
         <tr>
             <td><?php echo $row->id_usua; ?></td>
             <td><?php echo $row->nombre_usua; ?></td>
             <td><?php echo $row->apellidopat_usua; ?></td>
             <td><?php echo $row->apellidomat_usua; ?></td>
             <td><?php echo $row->fecha_cre_usua; ?></td>
             <td><?php echo $row->ci_usua; ?></td>
             <td><?php echo $row->cargo_usua; ?></td>
             <td><?php echo $row->estado; ?></td>
             <td><?php echo anchor('users/edit_user/'. $row->id_usua, 'Editar'); ?></td>
             <td><?php echo anchor('users/delete_user/'. $row->id_usua, 'Borrar'); ?></td>
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