<?php
@session_start();
include("Controllers/c_tableOrder.php");
if(isset($_SESSION['full-name'])) {
    $cf = new c_tableOrder();
    $cf->confirm_order();
}else{
    header("location:login.php");
}

?>