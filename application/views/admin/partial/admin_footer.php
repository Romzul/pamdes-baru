  <!-- Essential javascripts for application to work-->
  <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
// $('#sampleTable').DataTable();
$('#sampleTable').dataTable({
    "searching": false
});
  </script>

  <!-- fff -->
  <script>
function calculateTotal() {
    let unit_price = {
        air: 500
    };
    let item_price = {}

    item_price.air = ($("#beban").val() * unit_price.air)
    $("#total_tagihan").val(item_price.air);

}


$(function() {
    $(".qty").on("change keyup", calculateTotal)
})
  </script>

  </body>

  </html>
