<!-- jQuery -->
<script src="assects/plugins/jquery/jquery.min.js"></script>
<script src="assects/plugins/jquery/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 4 -->
<script src="assects/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assects/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assects/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assects/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assects/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assects/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assects/plugins/moment/moment.min.js"></script>
<script src="assects/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assects/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assects/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assects/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assects/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assects/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="assects/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assects/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assects/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assects/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assects/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assects/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assects/plugins/jszip/jszip.min.js"></script>
<script src="assects/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assects/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assects/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assects/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assects/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>






<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      // "responsive": true,
      "autoWidth": false,
      "scrollX": true,
      "scrollY": true,
      "scrollY": 200,
      "sScrollX": "110%",
      "sScrollY": "50vh",
      "bScrollCollapse": true,
      "paging": false,

    });
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