<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tableOrder.php");
    $tbo = new c_tableOrder();
    $tbo->tableOrder();
}else{
    header("location:login.php");
}

?>
