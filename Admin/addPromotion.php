<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_addPromotion.php");
    $adpr = new c_addPromotion();
    $adpr->addpromotion();
}else{
    header("location:login.php");
}

?>
