<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tablePromotion.php");
    $tbp = new c_tablePromotion();
    $tbp->tablePromotion();
}else{
    header("location:login.php");
}

?>
