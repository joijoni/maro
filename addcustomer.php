<?php
session_start();
$pagename="Add Customer";
include "includes/abstractions/users.php";
?>
<!-- Page Custommed CSS -->

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/customeradd.php";
  ?>
</main>


  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>
