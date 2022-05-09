<?php
session_start();
$pagename="Dashboard";
include "includes/abstractions/admin.php";
?>
<!-- Page Custommed CSS -->
<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/queryadd.php";
  ?>
</main>


  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>
