<?php
session_start();
$pagename="Edit Response";
include "includes/abstractions/admin.php";
?>

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/editresponse.php";
  ?>
</main>


  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>
