<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tableProduct.php");
    $tbp = new c_tableProduct();
    $tbp->tableproduct();
}else{
    header("location:login.php");
}

?>