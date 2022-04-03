<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_addBlog.php");
    $adb = new c_addBlog();
    $adb->deleteBlog();
}else{
    header("location:login.php");
}

?>