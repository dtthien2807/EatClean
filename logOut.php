<?php
@session_start();
include ("Controllers/c_loginUser.php");
if($_GET['func']){
    $logout= new c_loginUser();
    $logout->logOut();
}
?>
