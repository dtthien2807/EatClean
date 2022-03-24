<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_addBlog.php");
    $adb = new c_addBlog();
    $adb->addblog();
}else{
    header("location:login.php");
}

?>
