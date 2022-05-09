<?php 
ob_start();
session_start();
$pagename="Products";
include "includes/connections/connect.php";
include "includes/pages/general/head.php";
?>
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<?php
include "includes/pages/general/header.php";
?>
<body>
    <div class="container" style="padding-top:120px">
        <div class="col-sm-12">         
            <div class="row">
                <div class="col-sm-8">
                    <?php include "includes/pages/productsview.php";?>
                </div>
                <div class="col-sm-4">
                    <?php include "includes/pages/general/resources_sidepost.php";?>
                </div>
            </div>
        </div>
    </div>
</body>
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
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>