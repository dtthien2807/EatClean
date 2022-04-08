<?php
@session_start();
if(isset($_SESSION['full-name'])) {
    include("Controllers/c_chart.php");
    $chart = new c_chart();
    $chart->chart();
}else{
    header("location:login.php");
}

?>
