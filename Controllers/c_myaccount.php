<?php
class c_myaccount{
    public function __construct()
    {
    }
    public function myaccount(){
        $view_header = "Views/Header/header_account.php";
        $view = "Views/Contents/v_myaccount.php";
        include ("Templates/front-end/layout.php");
    }
}
?>
