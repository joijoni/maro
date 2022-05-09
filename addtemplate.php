<?php
session_start();
$pagename="Admin: Add A Template";
include "includes/abstractions/admin.php";
?>
<!-- Page Custommed CSS -->

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/templateadd.php";
  ?>
</main>
  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>
