<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_addProduct.php");
    $adp = new c_addProduct();
    $adp->deleteProduct();
}else{
    header("location:login.php");
}

?>