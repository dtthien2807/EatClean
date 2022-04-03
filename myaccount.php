<?php
@session_start();
if(isset($_SESSION['full-name-users'])) {
    include("Controllers/c_myaccount.php");
    $myacc = new c_myaccount();
    $myacc->myaccount();
}
else
    header("location:login.php");
?>