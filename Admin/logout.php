<?php
@session_start();
include ("Controllers/c_loginAdmin.php");
if($_GET['func']){
    $lg= new c_loginAdmin();
    $lg->logout();
}
?>
