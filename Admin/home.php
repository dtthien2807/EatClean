<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_home.php");
    $home = new c_home();
    $home->index();
}else{
    header("location:login.php");
}

?>