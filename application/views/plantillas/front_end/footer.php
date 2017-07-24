<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>

<!-- DataTables JavaScript -->
<script src="<?=base_url();?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/datatables-responsive/dataTables.responsive.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

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
