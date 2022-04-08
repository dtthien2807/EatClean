<?php
@session_start();
include ("Controllers/c_checkoutConfirm.php");
if(isset($_SESSION['full-name-users'], $_SESSION['cart'])) {
    $conf = new c_checkoutConfirm();
    $conf->confirm();
}
else
    header("location:shop.php");
?>
