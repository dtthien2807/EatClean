<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tableAdmin.php");
    $tba = new c_tableAdmin();
    $tba->tableAdmin();
}else{
    header("location:login.php");
}

?>