<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_addCategoryProduct.php");
    $ad = new c_addCategoryProduct();
    $ad->addcategory();
}else{
    header("location:login.php");
}

?>