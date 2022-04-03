<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_addProduct.php");
    $adp = new c_addProduct();
    $adp->addproduct();
}else{
    header("location:login.php");
}

?>
