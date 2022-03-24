<?php
class c_orderHistory{
    public function __construct()
    {
    }
    public function orderHistory(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_orderHistory.php";
        include ("Templates/front-end/layout.php");
    }
}
?>