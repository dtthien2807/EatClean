<?php
@session_start();
include ("Controllers/c_checkout.php");
if(isset($_SESSION['cart'])) {
    $checkout = new c_checkout();
    $checkout->checkout();
}
else
    header("location:shop.php");
?>