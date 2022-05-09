<?php
session_start();
$pagename="Add Product";
include "includes/abstractions/users.php";
?>
<!-- Page Custommed CSS -->

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/productadd.php";
  ?>
</main>


  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>
