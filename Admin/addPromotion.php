<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_addPromotion.php");
    $adpr = new c_addPromotion();
    $adpr->addpromotion();
}else{
    header("location:login.php");
}

?>
