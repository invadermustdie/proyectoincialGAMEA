<html>
<head>
    <title>Vista de Home principal</title>
</head>
<body>

<h1>Este es mi controlador principal de actividades</h1>
<?php
if ($query->num_rows() > 0):
    ?>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>fecha de creacion</td>
            <td>estado</td>
            <td colspan="2">acciones</td>

        </tr>
        <?php
        foreach ($query->result() as $row):
            ?>
         <tr>
             <td><?php echo $row->id; ?></td>
             <td><?php echo $row->first_name; ?></td>
             <td><?php echo $row->last_name; ?></td>
             <td><?php echo $row->created_date; ?></td>
             <td><?php echo $row->is_active; ?></td>
             <td><?php echo anchor('edit_user/'. $row->id, 'Editar');?></td>
             <td><?php echo anchor('delete_user/'. $row->id, 'Borrar');?></td>
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