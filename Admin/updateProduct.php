<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_addProduct.php");
    $adp = new c_addProduct();
    $adp->updateproduct();
}else{
    header("location:login.php");
}

?>