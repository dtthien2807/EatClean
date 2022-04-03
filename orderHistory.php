<?php
@session_start();
if(isset($_SESSION['full-name-users'])) {
    include("Controllers/c_orderHistory.php");
    $od = new c_orderHistory();
    $od->orderHistory();
}
else
    header("location:login.php");
?>