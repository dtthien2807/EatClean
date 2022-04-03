<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_tableReview.php");
    $tbr = new c_tableReview();
    $tbr->deleteReview();
}else{
    header("location:login.php");
}

?>
