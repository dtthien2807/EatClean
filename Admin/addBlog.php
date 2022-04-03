<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_addBlog.php");
    $adb = new c_addBlog();
    $adb->addblog();
}else{
    header("location:login.php");
}

?>
