<?php
@session_start();
if(isset($_SESSION['name'])) {
    include("Controllers/c_tableReview.php");
    $tbr = new c_tableReview();
    $tbr->tableReview();
}else{
    header("location:login.php");
}

?>
