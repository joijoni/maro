<?php 
if (isset($_SESSION['msg'])){
    "<script>alert('".$_SESSION['msg']."');</script>";
    unset($_SESSION['msg']);
}
?>