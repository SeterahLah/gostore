</div>
</div>
<!-- /row-->
</div><!-- container fluid-->

</div>
</div>
<!-- /.content -->
</div>
<footer class="main-footer no-print">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2022-2023 <a href="#">GO STORE</a>.</strong> Tempat Toko Online Terbaik
</footer>
</div>
<!-- Main Footer -->

<!-- ./wrapper -->


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  window.setTimeout(function () {
    $('.alert').fadeTo(500, 0).slideUp(500, function () {
      $(this).remove();
    });
  }, 3000)
</script>

</body>

</html>