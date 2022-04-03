<?php
@session_start();
if(isset($_SESSION['full-name-users'])) {
    include("Controllers/c_addAddress.php");
    $ad = new c_addAddress();
    $ad->address();
}
else
    header("location:login.php");
?>