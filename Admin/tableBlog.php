<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tableBlog.php");
    $tbb = new c_tableBlog();
    $tbb->tableBlog();
}else{
    header("location:login.php");
}

?>
