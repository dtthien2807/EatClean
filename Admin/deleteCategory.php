<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_addCategoryProduct.php");
    $ad = new c_addCategoryProduct();
    $ad->deleteCategory();
}else{
    header("location:login.php");
}

?>