<?php
include ("Controllers/c_cart.php");
$cart = new c_cart();
$cart->store();
$cart->removeCart();
$cart->update();
$cart->cart();

?>