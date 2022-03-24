<?php
class c_checkout{
    public function __construct()
    {
    }
    public function checkout(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_checkout.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
