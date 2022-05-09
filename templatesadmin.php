<?php
session_start();
include('includes/processing/checklogin.php');
$pagename="Admin :Template Management";
include('includes/abstractions/admin.php');
?>

<!-- Page Custommed CSS -->
<!-- DataTables -->
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
<?php
include "includes/pages/general/header.php";
echo $myemail==''?"Location:index.php":"";    
?>

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/templatemain.php";
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
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>