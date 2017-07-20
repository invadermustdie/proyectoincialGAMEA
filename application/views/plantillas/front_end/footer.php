<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>


<script src="<?php echo base_url(); ?>assets/scripts/dashboard-demo.js"></script>


<!-- llamada a mis archivos JS para la carga de combos -->
<?php
    if ($this->uri->segment(1) == 'c_formulario') {
    ?>
    <script src="<?php echo base_url(); ?>js/distritos.js"></script>
<?php
}
?>

</body>

</html>
