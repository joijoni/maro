<?php
session_start();
include('includes/processing/checklogin.php');
$pagename="Admin: Manage Query";
include "includes/abstractions/admin.php";
?>

<main id="main">
  <!-- ======= Clients Section ======= -->
 <?php
     include "includes/pages/unansweredmain.php";
?>
  
</main>
  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>