<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_tableUser.php");
    $tbu = new c_tableUser();
    $tbu->tableUser();
}else{
    header("location:login.php");
}

?>
