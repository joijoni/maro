<?php
session_start();
$pagename="Dashboard";
include "includes/abstractions/users.php";
?>
<!-- Page Custommed CSS -->
<!-- DataTables -->
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/home/userhomemain.php";
  ?>
</main>
  <!-- ======= Footer ======= -->
<?php 
    include "includes/pages/general/footer.php";
?>
<!-- Page Custom JS Script -->
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- SlimScroll -->
 </div>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>