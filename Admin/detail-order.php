<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tableOrder.php");
    $detail = new c_tableOrder();
    $detail->show_detail();
}else{
    header("location:login.php");
}

?>
