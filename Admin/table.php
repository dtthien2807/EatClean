<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_table.php");
    $tb = new c_table();
    $tb->table();
}else{
    header("location:login.php");
}

?>