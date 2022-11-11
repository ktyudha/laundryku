<footer class="main-footer">
  <strong>Copyright &copy; 2022 <a href="https://ktyudha.github.io">LaundryKu</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    develop <b>ktyudha</b>
  </div>
</footer>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="app/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="app/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="app/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="app/dist/js/pages/dashboard3.js"></script>

<!-- EDITOR -->
<script src="app/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
  $(function() {
    // Summernote
    $('#summernote').summernote()
  })
</script>


<!-- Sweetalert -->
<script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
<!--/// DATATABLE /// -->

<!-- DataTables  & Plugins -->
<script src="app/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="app/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="app/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="app/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="app/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="app/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="app/plugins/jszip/jszip.min.js"></script>
<script src="app/plugins/pdfmake/pdfmake.min.js"></script>
<script src="app/plugins/pdfmake/vfs_fonts.js"></script>
<script src="app/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="app/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="app/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>