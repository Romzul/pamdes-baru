 <!-- Essential javascripts for application to work-->
 <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
    </script>
	<!-- Datepicker -->
	<script src='<?= base_url('assets/'); ?>js/plugins/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Initialize
            $('#datepicker').datepicker({
                "startDate": "-5d",
                "keyboardNavigation": false
            });

        });
    </script>
</body>

</html>
