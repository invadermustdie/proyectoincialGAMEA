<?php echo form_open('users/v_new_users'); ?>
<?php if (validation_errors()): ?>
    <h3>Se ha encontrado algun error en el formulario que esta llenado!!!</h3>
    <p><?php
        echo validation_errors();
        ?></p>
<?php endif; ?>

<table border="1">
    <tr>
        <td>id</td>
        <td><?php echo form_input($id_usua); ?></td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td><?php echo form_input($nombre_usua); ?></td>
    </tr>
    <tr>
        <td>Apellido Paterno</td>
        <td><?php echo form_input($apellidopat_usua); ?></td>
    </tr>
    <tr>
        <td>Apellido Materno</td>
        <td><?php echo form_input($apellidomat_usua); ?></td>
    </tr>
    <tr>
        <td>C.I.</td>
        <td><?php echo form_input($ci_usua); ?></td>
    </tr>
    <tr>
        <td>Cargo</td>
        <td><?php echo form_input($cargo_usua); ?></td>
    </tr>
    <tr>
        <td>Estado</td>
        <td><?php echo form_checkbox($estado); ?></td>
    </tr>
</table>
<?php
echo form_submit('submit', 'Create');
?>or
<?php
echo anchor('c_users/index', 'Cancel');
?>
<?php
echo form_close();
?>

