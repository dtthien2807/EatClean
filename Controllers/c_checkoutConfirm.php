<?php
class c_checkoutConfirm{
    public function __construct()
    {
    }
    public function confirm(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_checkoutConfirm.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
