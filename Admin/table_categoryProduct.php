<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_tablecategoryProduct.php");
    $tbc = new c_tablecategoryProduct();
    $tbc->tablecategory();
}else{
    header("location:login.php");
}

?>